<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\DB;
use App\Models\rounds_completed;

class PDFController extends Controller
{
 
    public function pdf(Request $request,$id)
    {
        set_time_limit(0);  
        $data = DB::table('rounds_completed')->select('rounds_completed.*')->where('id', $id)->get();
        $pdf = PDF::loadView('myPDF', compact('data'));
        return $pdf->stream('รายงานการทำแบบบันทึก-jitdee.pdf');
    }
    
    public function pdf2(Request $request)
    {
        $data = rounds_completed::all();
        view()->share ('data', $data);
        
       
        $pdf = PDF::loadView('myPDF', compact('data'));
        return $pdf->stream('รายงานการทำแบบบันทึก-jitdee.pdf');
      
    }  
    
   
}
