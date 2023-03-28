<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\rounds_completed;
use App\Models\diary_day;
use App\Http\Controllers\diary_dayController;
use App\Http\Controllers\PDFController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});



Route::post('/store', [diary_dayController::class, 'store']);
Route::post('/store2', [diary_dayController::class, 'store2']);
Route::post('/store3', [diary_dayController::class, 'store3']);
Route::post('/store4', [diary_dayController::class, 'store4']);
Route::post('/store5', [diary_dayController::class, 'store5']);
Route::post('/store6', [diary_dayController::class, 'store6']);
Route::post('/store7', [diary_dayController::class, 'store7']);
Route::post('/store8', [diary_dayController::class, 'store8']);
Route::post('/store9', [diary_dayController::class, 'store9']);
Route::post('/store10', [diary_dayController::class, 'store10']);
Route::post('/store11', [diary_dayController::class, 'store11']);
Route::post('/store12', [diary_dayController::class, 'store12']);
Route::post('/store13', [diary_dayController::class, 'store13']);
Route::post('/store14', [diary_dayController::class, 'store14']);
Route::post('/store15', [diary_dayController::class, 'store15']);
Route::post('/store16', [diary_dayController::class, 'store16']);
Route::post('/store17', [diary_dayController::class, 'store17']);
Route::post('/store18', [diary_dayController::class, 'store18']);
Route::post('/store19', [diary_dayController::class, 'store19']);
Route::post('/store20', [diary_dayController::class, 'store20']);
Route::post('/store21', [diary_dayController::class, 'store21']);

Route::get('/certificate1', function () {
    return view('certificate1');
})->middleware('auth');

Route::get('/about', function () {
    return view('about');
})->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
})->middleware('auth');

Route::get('/record', function () {
    return view('record');
})->middleware('auth');

Route::get('/Menu_day', function () {
    return view('Menu_day');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/day1', function () {
    return view('day1');
})->middleware('auth');

Route::get('/day2', function () {
    return view('day2');
})->middleware('auth');

Route::get('/day3', function () {
    return view('day3');
})->middleware('auth');

Route::get('/day4', function () {
    return view('day4');
})->middleware('auth');

Route::get('/day5', function () {
    return view('day5');
})->middleware('auth');

Route::get('/day6', function () {
    return view('day6');
})->middleware('auth');

Route::get('/day7', function () {
    return view('day7');
})->middleware('auth');

Route::get('/day8', function () {
    return view('day8');
})->middleware('auth');

Route::get('/day9', function () {
    return view('day9');
})->middleware('auth');

Route::get('/day10', function () {
    return view('day10');
})->middleware('auth');

Route::get('/day11', function () {
    return view('day11');
})->middleware('auth');

Route::get('/day12', function () {
    return view('day12');
})->middleware('auth');

Route::get('/day13', function () {
    return view('day13');
})->middleware('auth');

Route::get('/day14', function () {
    return view('day14');
})->middleware('auth');

Route::get('/day15', function () {
    return view('day15');
})->middleware('auth');

Route::get('/day16', function () {
    return view('day16');
})->middleware('auth');

Route::get('/day17', function () {
    return view('day17');
})->middleware('auth');

Route::get('/day18', function () {
    return view('day18');
})->middleware('auth');

Route::get('/day19', function () {
    return view('day19');
})->middleware('auth');

Route::get('/day20', function () {
    return view('day20');
})->middleware('auth');

Route::get('/day21', function () {
    return view('day21');
})->middleware('auth');

Route::get('/team', function () {
    return view('team');
})->middleware('auth');

Route::get('/choose', function () {
    return view('choose');
});

Route::get('/profile', function () {
    return view('profile');
});

Auth::routes();

Route::get('/mypdf/{rounds}', [App\Http\Controllers\PDFController::class, 'pdf']);


Route::middleware(['auth:sanctum'])->get('/record', function () {
    $rounds_story = DB::table('rounds_completed')
    ->join('users', 'rounds_completed.user_id', '=', 'users.id')
    ->where('rounds_completed.user_id', Auth::user()->id)
    ->orwhere('rounds_completed.rounds')
    ->select(DB::raw('rounds_completed.rounds, COUNT(*) as count_round, SUM(rounds_completed.score) as total_score'))
    ->groupBy('rounds_completed.rounds')
    ->orderBy('rounds_completed.rounds', 'asc')
    ->get();
    return view('record', compact('rounds_story'));
})->name('/record');


Route::middleware(['auth:sanctum'])->get('/results', function () {
    $rounds = DB::table('rounds_completed')
    ->where('rounds_completed.user_id', Auth::user()->id)
    ->orderBy('rounds_completed.rounds', 'desc')
    ->limit(1)
    ->pluck('rounds_completed.rounds');

$rounds_story = DB::table('rounds_completed')
    ->join('users', 'rounds_completed.user_id', '=', 'users.id')
    ->where('rounds_completed.user_id', Auth::user()->id)
    ->whereIn('rounds_completed.rounds', $rounds)
    ->select(DB::raw('rounds_completed.rounds, COUNT(*) as count_round, SUM(rounds_completed.score) as total_score'))
    ->groupBy('rounds_completed.rounds')
    ->orderBy('rounds_completed.rounds', 'asc')

    ->get();
    return view('results', compact('rounds_story'));
})->name('/results');


Route::get('GoogleCallbacks', [
    App\Http\Controllers\HomeController::class,
    'GoogleCallback',
]);
Route::post('ajaxRequestPost', [
    App\Http\Controllers\SocialAuthLoginController::class,
    'ajaxRequestPost',
])->name('ajaxRequest.post');
Route::post('ajaxRequestPost2', [
    App\Http\Controllers\SocialAuthLoginController::class,
    'ajaxRequestPost2',
])->name('ajaxRequest2.post');

Route::post('/profile-update', [
    App\Http\Controllers\HomeController::class,
    'profile_update',
])->name('profile-update');