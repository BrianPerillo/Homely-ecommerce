<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUsersMW
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
      $user = $request->user();
      if($user != null){
          if ($user->email == 'admin@admin') {
            return $next($request);
          } else{
            return redirect('login')->with('error','Necesitas ser administrador');
          }

        }

    }
}
