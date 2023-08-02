<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
class isAdmin
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
        $user = User::where('id','=', session()->has('login_id'))->first();
        if($user){
            if($user->role == "admin"){
                return $next($request);
            }else{
                return redirect('login')->with('fail','you have to Login First ');
            }
        }
        return redirect('login')->with('fail','you have to Login First ');

    }
}
