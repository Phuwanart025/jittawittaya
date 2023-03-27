<?php

use App\Http\Controllers\diary_dayController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Is_day;
use App\Models\rounds_completed;
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
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/team', function () {
    return view('team');
})->middleware('auth');

Route::get('/choose', function () {
    return view('choose');
})->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/mypdf/{rounds}', [App\Http\Controllers\PDFController::class, 'pdf'])->middleware('auth');

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
        ->limit(1)
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

Auth::routes();

Route::group(['middleware' => ['auth:sanctum']], function () {

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

});


Route::middleware(['auth:sanctum', 'Is_day'])->group(function () {
    for ($i = 1; $i <= 21; $i++) {
        Route::get('/day'.$i, function () use ($i) {
            return view('day'.$i);
        })->name('day'.$i);
    }
});

Route::get('/Menu_day', function () {
    $last_round_completed = rounds_completed::where('user_id', Auth::user()->id)
        ->join('jobs_21day', 'rounds_completed.jobs_id', '=', 'jobs_21day.id')
        ->select('rounds_completed.jobs_id', DB::raw('COUNT(rounds_completed.id) as completed_rounds'), 'rounds_completed.created_at')
        ->groupBy('rounds_completed.jobs_id', 'rounds_completed.created_at')
        ->orderByDesc('jobs_id')
        ->first();
    return view('Menu_day', compact('last_round_completed'));
})->middleware('auth');