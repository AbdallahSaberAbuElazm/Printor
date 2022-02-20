<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserIsSupport
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $user = Auth::user();
      $roles = $user->roles;
      foreach ($roles as $role) {
        if($role->role == 'library_owner'){
          return $next($request);
      }
      }
      Session::flush();
      Auth::logout();
      return redirect('login');
    }

}
