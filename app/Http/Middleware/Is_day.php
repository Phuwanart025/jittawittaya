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
        $last_round_completed = rounds_completed::where('user_id', Auth::user()->id)
            ->join('jobs_21day', 'rounds_completed.jobs_id', '=', 'jobs_21day.id')
            ->select('rounds_completed.jobs_id', DB::raw('COUNT(rounds_completed.id) as completed_rounds'), 'rounds_completed.created_at')
            ->groupBy('rounds_completed.jobs_id', 'rounds_completed.created_at')
            ->orderByDesc('jobs_id')
            ->first();

        if (!$last_round_completed || $last_round_completed->completed_rounds === 21) {
            if ($request->route()->getName() !== 'day1') {
                return redirect()->route('day1');
            }
        
    } else {
        $last_completed_time = Carbon::parse($last_round_completed->created_at);
        $current_time = Carbon::now();
        $elapsed_time = $current_time->diffInHours($last_completed_time);

        // If the last job was completed less than 12 hours ago, show an alert message
        if ($elapsed_time < 12) {
            $end_time = $last_completed_time->addHours(12)->format('d-m-Y H:i:s');
            $message = 'คุณสามารถเข้าสู่รอบถัดไปได้หลังจาก ' . $end_time;
            $next_job = $last_round_completed->jobs_id + 1;

            if ($next_job) {
                $message .= ' วันถัดไป : วันที่ ' . $next_job;
            }

            Alert::error($message, 'error')->timerProgressBar()->persistent(true)->autoClose(false);
            return redirect()->back();
        }    
        
        // If it has been 12 hours or more since the last job was completed, proceed to the next job
        if ($last_round_completed && $last_round_completed->jobs_id < 21) {
            $next_round = $last_round_completed->jobs_id + 1;

            // Check if the new URL is different from the old one
            if ($request->route()->getName() !== 'day'.$next_round) {
                return redirect()->route('day'.$next_round);
            }
        }
 }
        return $next($request);
    }
}