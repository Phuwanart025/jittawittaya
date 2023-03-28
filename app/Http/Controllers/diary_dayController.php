<?php

namespace App\Http\Controllers;


use App\Models\diary_day;
use App\Models\diary_day2;
use App\Models\diary_day3;
use App\Models\diary_day4;
use App\Models\diary_day5;
use App\Models\diary_day6;
use App\Models\diary_day7;
use App\Models\diary_day8;
use App\Models\diary_day9;
use App\Models\diary_day10;
use App\Models\diary_day11;
use App\Models\diary_day12;
use App\Models\diary_day13;
use App\Models\diary_day14;
use App\Models\diary_day15;
use App\Models\diary_day16;
use App\Models\diary_day17;
use App\Models\diary_day18;
use App\Models\diary_day19;
use App\Models\diary_day20;
use App\Models\diary_day21;
use App\Models\rounds_completed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class diary_dayController extends Controller
{
    //Day_1
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v4' => 'required',
                // 'v5' => 'required',
                // 'v6' => 'required',
            ]);

            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 1)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 1;
            $diary1->score = 3;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t1 = $request->v3;
            //
            $v4 = implode(',', $request->input('v4'));
            $serialized_v4 = serialize($v4);
            $diary->story_d1 = $serialized_v4;
            // $diary->thoughts = $request->v5;
            // $diary->emotions = $request->v6;
            $diary1->save();
            $diary->diary_day()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->with([
                Alert::error('เกิดข้อผิดพลาด', 'ไม่สามารถบันทึกข้อมูลได้ คุณกรอกข้อมูลไม่ครบ'),
                // 'error' => 'ไม่สามารถบันทึกได้ ข้อมูลไม่ถูกต้อง.', 
            ]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_2
    public function store2(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v4' => 'required',
                'feel_body1' => 'required',
                'feel_body2' => 'required',
                'feel_body3' => 'required',
                'feel_body4' => 'required',
                'feel_body5' => 'required',
                'feel_body6' => 'required',
            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 2)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day2();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 2;
            $diary1->score = 3;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t2 = $request->v3;
            $diary->two_friends = $request->v4;
            $diary->feel_body1 = $request->feel_body1;
            $diary->feel_body2 = $request->feel_body2;
            $diary->feel_body3 = $request->feel_body3;
            $diary->feel_body4 = $request->feel_body4;
            $diary->feel_body5 = $request->feel_body5;
            $diary->feel_body6 = $request->feel_body6;
            $diary1->save();
            $diary->diary_day2()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_3
    public function store3(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v4' => 'required',
                'value1' => 'required',
                'value2' => 'required',
                'value3' => 'required',
                'value4' => 'required',
                'value5' => 'required',
                'value6' => 'required',
            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 3)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day3();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 3;
            $diary1->score = 3;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t3 = $request->v3;
            $diary->scared_brickstory_v4 = $request->v4;
            $diary->d3_v5 = $request->input('value1');
            $diary->d3_v6 = $request->input('value2');
            $diary->d3_v7 = $request->input('value3');
            $diary->d3_v8 = $request->input('value4');
            $diary->d3_v9 = $request->input('value5');
            $diary->d3_v10 = $request->input('value6');
            $diary1->save();
            $diary->diary_day3()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_4
    public function store4(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required'
            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 4)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day4();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 4;
            $diary1->score = 3;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t4 = $request->v3;
            $diary1->save();
            $diary->diary_day4()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_5
    public function store5(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v4' => 'required',

            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 5)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day5();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 5;
            $diary1->score = 3;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t5 = $request->v3;

            $v4 = implode(',', $request->input('v4'));
            $serialized_v4 = serialize($v4);
            $diary->idea_v4 = $serialized_v4;

            $diary1->save();
            $diary->diary_day5()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_6
    public function store6(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v3_2' => 'required',
                'v4' => 'required',

            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 6)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day6();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 6;
            $diary1->score = 5;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t6 = $request->v3;
            $diary->detail2_t6 = $request->v3_2;
            $diary->grandma_v4 = $request->v4;
            $diary1->save();
            $diary->diary_day6()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_7
    public function store7(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v3_2' => 'required',
                'v4_1' => 'required',
                'v4_2' => 'required',
                'v4_3' => 'required',
                'v4_4' => 'required',

            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 7)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day7();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 7;
            $diary1->score = 5;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t7 = $request->v3;
            $diary->detail2_t7 = $request->v3_2;
            $diary->thoughts_feelings = $request->v4_1;
            $diary->thoughts_feelings2 = $request->v4_2;
            $diary->thoughts_feelings3 = $request->v4_3;
            $diary->thoughts_feelings4 = $request->v4_4;
            $diary1->save();
            $diary->diary_day7()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_8
    public function store8(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v3_2' => 'required',
                'v4' => 'required',
                'v5' => 'required',

            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 8)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day8();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 8;
            $diary1->score = 5;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t8 = $request->v3;
            $diary->detail2_t8 = $request->v3_2;
            $diary->story_d8 = $request->v4;
            $diary->story2_d8 = $request->v5;
            $diary1->save();
            $diary->diary_day8()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_9
    public function store9(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v3_2' => 'required',
                'v4' => 'required',
                'v5' => 'required',

            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 9)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day9();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 9;
            $diary1->score = 5;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t9 = $request->v3;
            $diary->detail2_t9 = $request->v3_2;
            $diary->story_d9 = $request->v4;
            $diary->story2_d9 = $request->v5;
            $diary1->save();
            $diary->diary_day9()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_10
    public function store10(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v3_2' => 'required',
                'v4' => 'required',
                'v5' => 'required',
                'v6' => 'required',

            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 10)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day10();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 10;
            $diary1->score = 5;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t10 = $request->v3;
            $diary->detail2_t10 = $request->v3_2;
            $diary->story_d10 = $request->v4;
            $diary->story2_d10 = $request->v5;
            $diary->story3_d10 = $request->v6;
            $diary1->save();
            $diary->diary_day10()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_11
    public function store11(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v3_2' => 'required',
                'v4' => 'required',
                'v5' => 'required',


            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 11)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day11();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 11;
            $diary1->score = 5;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t11 = $request->v3;
            $diary->detail2_t11 = $request->v3_2;
            $diary->grandma2_v4 = $request->v4;
            $diary->thought_pattern11 = $request->v5;
            $diary1->save();
            $diary->diary_day11()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_12
    public function store12(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v3_2' => 'required',
                'v3_3' => 'required',
                'v4_1' => 'required',
                'v4_2' => 'required',
                'v5_1' => 'required',
                'v5_2' => 'required',


            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 12)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day12();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 12;
            $diary1->score = 5;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t12 = $request->v3;
            $diary->detail2_t12 = $request->v3_2;
            $diary->detail3_t12 = $request->v3_3;
            $diary->proof_support_v4_1 = $request->v4_1;
            $diary->objectionable_evidence_v4_2    = $request->v4_2;
            $diary->proof_support_v5_1 = $request->v5_1;
            $diary->objectionable_evidence_v5_2     = $request->v5_2;
            $diary1->save();
            $diary->diary_day12()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_13
    public function store13(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v3_2' => 'required',
                'v3_3' => 'required',
                'v4' => 'required',
                'v5_1' => 'required',
                'v5_2' => 'required',
                'v6_1' => 'required',
                'v6_2' => 'required',
                'v7_1' => 'required',
                'v7_2' => 'required',


            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 13)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day13();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 13;
            $diary1->score = 5;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t13 = $request->v3;
            $diary->detail2_t13 = $request->v3_2;
            $diary->detail3_t13 = $request->v3_3;
            $diary->story_d13 = $request->v4;
            $diary->new_idea_v5_1    = $request->v5_1;
            $diary->new_emotions_v5_2    = $request->v5_2;
            $diary->new_idea_v6_1 = $request->v6_1;
            $diary->new_emotions_v6_2    = $request->v6_2;
            $diary->new_idea_v7_1 = $request->v7_1;
            $diary->new_emotions_v7_2    = $request->v7_2;
            $diary1->save();
            $diary->diary_day13()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_14
    public function store14(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v3_2' => 'required',
                'v3_3' => 'required',
                'v4_1' => 'required',
                'v4_2' => 'required',
                'v4_3' => 'required',
                'v5_1' => 'required',
                'v5_2' => 'required',
                'v5_3' => 'required',
                'v6_1' => 'required',
                'v6_2' => 'required',
                'v6_3' => 'required',
                'v7' => 'required',


            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 14)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day14();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 14;
            $diary1->score = 5;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t14 = $request->v3;
            $diary->detail2_t14 = $request->v3_2;
            $diary->detail3_t14 = $request->v3_3;
            $diary->story_v4 = $request->v4_1;
            $diary->positive_v4    = $request->v4_2;
            $diary->negative_v4    = $request->v4_3;
            $diary->story_v5 = $request->v5_1;
            $diary->positive_v5    = $request->v5_2;
            $diary->negative_v5    = $request->v5_3;
            $diary->story_v6 = $request->v6_1;
            $diary->positive_v6    = $request->v6_2;
            $diary->negative_v6    = $request->v6_3;
            $diary->story_positive_v7 = $request->v7;
            $diary1->save();
            $diary->diary_day14()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_15
    public function store15(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v3_2' => 'required',
                'v3_3' => 'required',
                'v4' => 'required',
                'v4_2' => 'required',
                'v4_3' => 'required',
                'v5' => 'required',
                'v5_2' => 'required',
                'v5_3' => 'required',

            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 15)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day15();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 15;
            $diary1->score = 5;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t15 = $request->v3;
            $diary->detail2_t15 = $request->v3_2;
            $diary->detail3_t15 = $request->v3_3;
            $diary->rethink_15 = $request->v4;
            $diary->new_mood_15    = $request->v4_2;
            $diary->new_mood_level    = $request->v4_3;
            $diary->rethink2_15 = $request->v5;
            $diary->new_mood2_15    = $request->v5_2;
            $diary->new_mood_level2    = $request->v5_3;

            $diary1->save();
            $diary->diary_day15()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_16
    public function store16(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v3_2' => 'required',
                'v3_3' => 'required',
                'v4' => 'required',
                'v4_2' => 'required',
                'v4_3' => 'required',
                'v5' => 'required',
                'v5_2' => 'required',
                'v5_3' => 'required',

            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 16)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day16();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 16;
            $diary1->score = 5;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t16 = $request->v3;
            $diary->detail2_t16 = $request->v3_2;
            $diary->detail3_t16 = $request->v3_3;
            $diary->rethink_16 = $request->v4;
            $diary->new_mood_16    = $request->v4_2;
            $diary->new_mood_level    = $request->v4_3;
            $diary->rethink2_16 = $request->v5;
            $diary->new_mood2_16    = $request->v5_2;
            $diary->new_mood_level2    = $request->v5_3;

            $diary1->save();
            $diary->diary_day16()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_17
    public function store17(Request $request)
    {
        try {
            $this->validate($request, [
                'flexRadioDefault' => 'required',
                'value' => 'required',
                'v3' => 'required',
                'v3_2' => 'required',
                'v3_3' => 'required',
                'v4' => 'required',
                'v4_2' => 'required',
                'v4_3' => 'required',
                'v5' => 'required',
                'v5_2' => 'required',
                'v5_3' => 'required',

            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 17)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day17();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 17;
            $diary1->score = 5;
            $diary->color_feel_today = $request->flexRadioDefault;
            $diary->sensation_level = $request->input('value');
            $diary->detail_t17 = $request->v3;
            $diary->detail2_t17 = $request->v3_2;
            $diary->detail3_t17 = $request->v3_3;
            $diary->rethink_17 = $request->v4;
            $diary->new_mood_17    = $request->v4_2;
            $diary->new_mood_level    = $request->v4_3;
            $diary->rethink2_17 = $request->v5;
            $diary->new_mood2_17    = $request->v5_2;
            $diary->new_mood_level2    = $request->v5_3;

            $diary1->save();
            $diary->diary_day17()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_18
    public function store18(Request $request)
    {
        try {
            $this->validate($request, [
                'v1' => 'required',
                'v2' => 'required',
                'v3' => 'required',
                'v4' => 'required',
                'v5' => 'required',
                'v6' => 'required',
                'v7' => 'required',
                'v8' => 'required',
                'v9' => 'required',
                'v10' => 'required',
                'v11' => 'required',
                'v12' => 'required',
                'v13' => 'required',
                'v14' => 'required',


            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 18)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day18();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 18;
            $diary1->score = 5;
            $diary->data1_t18 = $request->v1;
            $diary->data2_t18 = $request->v2;
            $diary->data3_t18 = $request->v3;
            $diary->data4_t18 = $request->v4;
            $diary->data5_t18 = $request->v5;
            $diary->data6_t18 = $request->v6;
            $diary->data7_t18 = $request->v7;
            $diary->data8_t18 = $request->v8;
            $diary->data9_t18 = $request->v9;
            $diary->data10_t18 = $request->v10;
            $diary->data11_t18 = $request->v11;
            $diary->data12_t18 = $request->v12;
            $diary->data13_t18 = $request->v13;
            $diary->data14_t18 = $request->v14;


            $diary1->save();
            $diary->diary_day18()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_19
    public function store19(Request $request)
    {
        try {
            $this->validate($request, [
                'v1' => 'required',
                'v2' => 'required',
                'v3' => 'required',
                'v4' => 'required',
                'v5' => 'required',
                'v6' => 'required',
                'v7' => 'required',
                'v8' => 'required',
                'v9' => 'required',
                'v10' => 'required',
                'v11' => 'required',
                'v12' => 'required',
                'v13' => 'required',
                'v14' => 'required',


            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 19)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day19();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 19;
            $diary1->score = 5;
            $diary->data1_t19 = $request->v1;
            $diary->data2_t19 = $request->v2;
            $diary->data3_t19 = $request->v3;
            $diary->data4_t19 = $request->v4;
            $diary->data5_t19 = $request->v5;
            $diary->data6_t19 = $request->v6;
            $diary->data7_t19 = $request->v7;
            $diary->data8_t19 = $request->v8;
            $diary->data9_t19 = $request->v9;
            $diary->data10_t19 = $request->v10;
            $diary->data11_t19 = $request->v11;
            $diary->data12_t19 = $request->v12;
            $diary->data13_t19 = $request->v13;
            $diary->data14_t19 = $request->v14;


            $diary1->save();
            $diary->diary_day19()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_20
    public function store20(Request $request)
    {
        try {
            $this->validate($request, [
                'v1' => 'required',
                'v2' => 'required',
                'v3' => 'required',
                'v4' => 'required',
                'v5' => 'required',
                'v6' => 'required',
                'v7' => 'required',
                'v8' => 'required',
                'v9' => 'required',
                'v10' => 'required',
                'v11' => 'required',
                'v12' => 'required',
                'v13' => 'required',
                'v14' => 'required',


            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 20)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day20();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 20;
            $diary1->score = 5;
            $diary->data1_t20 = $request->v1;
            $diary->data2_t20 = $request->v2;
            $diary->data3_t20 = $request->v3;
            $diary->data4_t20 = $request->v4;
            $diary->data5_t20 = $request->v5;
            $diary->data6_t20 = $request->v6;
            $diary->data7_t20 = $request->v7;
            $diary->data8_t20 = $request->v8;
            $diary->data9_t20 = $request->v9;
            $diary->data10_t20 = $request->v10;
            $diary->data11_t20 = $request->v11;
            $diary->data12_t20 = $request->v12;
            $diary->data13_t20 = $request->v13;
            $diary->data14_t20 = $request->v14;


            $diary1->save();
            $diary->diary_day20()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }

    //Day_21
    public function store21(Request $request)
    {
        try {
            $this->validate($request, [
                'v1' => 'required',
                'v2' => 'required',
                'v3' => 'required',
                'v4' => 'required',
                'v5' => 'required',
                'v6' => 'required',
                'v7' => 'required',
                'v8' => 'required',
                'v9' => 'required',
                'v10' => 'required',
                'v11' => 'required',
                'v12' => 'required',
                'v13' => 'required',
                'v14' => 'required',


            ]);
            $latest = rounds_completed::where('user_id', Auth::user()->id)
                ->where('jobs_id', 21)
                ->orderBy('id', 'desc')
                ->first();
            $diary1 = new rounds_completed();
            $diary = new diary_day21();
            if (empty($latest) || is_null($latest)) {
                $diary1->rounds = 1;
            } else {
                $diary1->rounds = $latest->rounds + 1;
            }
            $diary1->user_id = Auth::user()->id;
            $diary1->jobs_id = 21;
            $diary1->score = 10;
            $diary->activity_summary = $request->activity_summary;
            $diary->data1_t21 = $request->v1;
            $diary->data2_t21 = $request->v2;
            $diary->data3_t21 = $request->v3;
            $diary->data4_t21 = $request->v4;
            $diary->data5_t21 = $request->v5;
            $diary->data6_t21 = $request->v6;
            $diary->data7_t21 = $request->v7;
            $diary->data8_t21 = $request->v8;
            $diary->data9_t21 = $request->v9;
            $diary->data10_t21 = $request->v10;
            $diary->data11_t21 = $request->v11;
            $diary->data12_t21 = $request->v12;
            $diary->data13_t21 = $request->v13;
            $diary->data14_t21 = $request->v14;


            $diary1->save();
            $diary->diary_day21()->associate($diary1);
            $diary->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        Alert::success('บันทึกข้อมูลสำเร็จ', '');
        return redirect('/results');
    }
}
