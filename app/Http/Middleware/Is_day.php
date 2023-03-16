<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\rounds_completed;
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
        // หา jobs_id ลำดับสูงสุดของผู้ใช้งาน
        $last_round_completed = rounds_completed::where('user_id', Auth::user()->id)
            ->join('jobs_21day', 'rounds_completed.jobs_id', '=', 'jobs_21day.id')
            ->select('rounds_completed.jobs_id', DB::raw('COUNT(rounds_completed.id) as completed_rounds'), 'rounds_completed.created_at')
            ->groupBy('rounds_completed.jobs_id', 'rounds_completed.created_at')
            ->orderByDesc('jobs_id')
            ->first();
    
        if (!$last_round_completed || $last_round_completed->completed_rounds === 21) {
            return redirect()->route('day1');
        }
    
        // ตรวจสอบว่าเวลาที่บันทึกข้อมูลล่าสุดถึงเวลา 12 ชั่วโมงหรือไม่
        $last_completed_time = Carbon::parse($last_round_completed->created_at);
        $current_time = Carbon::now();
        $elapsed_time = $current_time->diffInHours($last_completed_time);
        
        if ($elapsed_time < 12) {
            $remaining_time = 12 * 60 * 60 - $elapsed_time * 60 * 60;
            $remaining_hours = floor($remaining_time / 3600);
            $remaining_minutes = floor(($remaining_time % 3600) / 60);
            $remaining_seconds = $remaining_time % 60;
        
            $countdown_time = $current_time->addSeconds($remaining_time)->format('Y-m-d H:i:s');
        
            $message = 'คุณสามารถเข้าสู่รอบถัดไปได้ในอีก ' . $remaining_hours . ' ชั่วโมง ' . $remaining_minutes . ' นาที ' . $remaining_seconds . ' วินาที โดยการนับถอยหลังจะสิ้นสุดเมื่อ ' . $countdown_time;
        
            Alert::error($message, 'error')->timerProgressBar()->persistent(true)->autoClose(false);
            return redirect()->back();
        }
        // ถ้าครบ 12 ชั่วโมงให้เข้าสู่หน้าถัดไป
        $next_round = $last_round_completed + 1;
        return redirect()->route('day'.$next_round);
    
    }
}