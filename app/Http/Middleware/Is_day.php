<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\rounds_completed;
use App\Models\jobs_21day;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class Is_day
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Find the highest jobs_id of the user
        $last_round_completed =  rounds_completed::where('user_id', Auth::user()->id)
        ->join('jobs_21day', 'rounds_completed.jobs_id', '=', 'jobs_21day.id')
        ->select('rounds_completed.jobs_id', 'rounds_completed.rounds')
        ->groupBy('rounds_completed.jobs_id', 'rounds_completed.rounds', 'rounds_completed.created_at')
        ->orderByDesc('rounds_completed.rounds')
        ->limit(1)
        ->first();

        if (!$last_round_completed || $last_round_completed->jobs_id === 21) {
            if ($request->route()->getName() !== 'day1') {
                return redirect()->route('day1');
            }
        } elseif ($last_round_completed->jobs_id < 21) {
            $nextRound = $last_round_completed->jobs_id + 1;
            if ($nextRound === 21) {
                    $nextRound = 1;
                    return redirect()->route('day1');
                } elseif ($request->route()->getName() !== 'day'.$nextRound) {
                    return redirect()->route('day'.$nextRound);
                }
        }
        
        if ($last_round_completed) {
            $lastCompletedTime = Carbon::parse($last_round_completed->created_at);
            $currentTime = Carbon::now();
            $elapsedTime = $currentTime->diffInHours($lastCompletedTime);
            
            // If the last job was completed less than 1 hour ago, show an alert message
            if ($elapsedTime < 1) {
                $endTime = $lastCompletedTime->addHours(1)->format('d-m-Y H:i:s');
                $message = 'คุณสามารถเข้าสู่รอบถัดไปได้หลังจาก ' . $endTime;
                $nextJob = $last_round_completed->jobs_id + 1;
                
                if ($nextJob) {
                    $message .= ' วันถัดไป: วันที่ ' . $nextJob;
                }
                
                Alert::error($message, 'error')->timerProgressBar()->persistent(true)->autoClose(false);
                return redirect()->back();
            }
        }
        
        // If it has been 1 hour or more since the last job was completed, proceed to the next job
        return $next($request);
    }
}
        
          