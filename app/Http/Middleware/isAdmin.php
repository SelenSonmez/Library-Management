<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Models\UserType;
use Closure;
use Illuminate\Http\Request;

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
        // $user = User::find(session('id'));
        $user_type = UserType::find(session('id'));
        if (!($user_type->name == 'admin'))
            return redirect('/welcome');
        // return redirect()->back();

        return $next($request);
    }
}
