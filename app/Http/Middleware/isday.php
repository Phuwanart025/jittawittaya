<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\rounds_completed;

class isday
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
        $rounds = DB::table('rounds_completed')
    ->orderBy('rounds_completed.jobs_id', 'desc')
    ->limit(1)
    ->pluck('rounds_completed.jobs_id'); 

        if(rounds_completed::where('jobs_id',  $rounds)->get())
        {
            return $next($request);
        }
            return redirect('home')->with('ล้มเหลว');
        }

}
