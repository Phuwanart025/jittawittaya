<?php

namespace App\Http\Controllers;

use App\Models\diary_day2;
use App\Models\diary_day;
use App\Models\rounds_completed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class diary_dayController extends Controller
{
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required'
            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)->where('jobs_id', 1)->orderBy('id', 'desc')->first();
            $diary1 = new rounds_completed;
            $diary = new diary_day;
            if(empty($latest) || is_null($latest)){
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 1;
            $diary1->score = 10;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t1 = $request->v3;
            $diary1->save();
            $diary->diary_day()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Error' => $e->getMessage()]);
        }
        return redirect('/results');
    }

    public function store2(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required'
            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)->where('jobs_id', 2)->orderBy('id', 'desc')->first();
            $diary1 = new rounds_completed;
            $diary = new diary_day;
            if(empty($latest) || is_null($latest)){
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 2;
            $diary1->score = 10;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t1 = $request->v3;
            $diary1->save();
            $diary->diary_day()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Error' => $e->getMessage()]);
        }
        return redirect('/results');
    }

}