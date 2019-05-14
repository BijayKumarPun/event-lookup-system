<?php

namespace App\Http\Middleware;

use Closure;

class HostCheck
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
      $host =$request->session()->get('hemail');
      if($host === null)
      {
        return redirect('/');
      }
        return $next($request);
    }
}
