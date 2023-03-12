<?php

namespace App\Http\Controllers;

use App\Models\rounds_completed;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{

    public function pdf(Request $request, $rounds)
    {
        set_time_limit(0);
        $data = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day1', 'rounds_completed.id', '=', 'day1.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day1.*', 'users.*')
            ->get();
            $data2 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day2', 'rounds_completed.id', '=', 'day2.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day2.*', 'users.*')
            ->get();
            $data3 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day3_', 'rounds_completed.id', '=', 'day3_.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day3_.*', 'users.*')
            ->get();
            $data4 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day4', 'rounds_completed.id', '=', 'day4.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day4.*', 'users.*')
            ->get();
            $data5 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day5', 'rounds_completed.id', '=', 'day5.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day5.*', 'users.*')
            ->get();
            $data6 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day6', 'rounds_completed.id', '=', 'day6.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day6.*', 'users.*')
            ->get();
            $data7 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day7', 'rounds_completed.id', '=', 'day7.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day7.*', 'users.*')
            ->get();
            $data8 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day8', 'rounds_completed.id', '=', 'day8.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day8.*', 'users.*')
            ->get();
            $data9 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day9', 'rounds_completed.id', '=', 'day9.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day9.*', 'users.*')
            ->get();
            $data10 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day10', 'rounds_completed.id', '=', 'day10.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day10.*', 'users.*')
            ->get();
            $data11 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day11', 'rounds_completed.id', '=', 'day11.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day11.*', 'users.*')
            ->get();
            $data12 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day12', 'rounds_completed.id', '=', 'day12.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day12.*', 'users.*')
            ->get();
            $data13 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day13', 'rounds_completed.id', '=', 'day13.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day13.*', 'users.*')
            ->get();
            $data14 = DB::table('rounds_completed')
            ->join('users', 'rounds_completed.user_id', '=', 'users.id')
            ->join('day14', 'rounds_completed.id', '=', 'day14.rounds_id')
            ->where('rounds_completed.user_id', Auth::user()->id)
            ->where('rounds_completed.rounds', $rounds)
            ->select('rounds_completed.*', 'day14.*', 'users.*')
            ->get();

        $pdf = PDF::loadView('myPDF', compact('data','data2','data3','data4','data5','data6','data7','data8','data9','data10'
        ,'data11','data12','data13','data14'));
        //  $pdf->set_option('isRemoteEnabled', TRUE);
        $pdf->render();
        return $pdf->stream('รายงานการทำแบบบันทึก-ReThink.pdf');

    }



}
