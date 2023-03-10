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

        $pdf = PDF::loadView('myPDF', compact('data','data2'));
        //  $pdf->set_option('isRemoteEnabled', TRUE);
        $pdf->render();
        return $pdf->stream('รายงานการทำแบบบันทึก-jitdee.pdf');

    }



}
