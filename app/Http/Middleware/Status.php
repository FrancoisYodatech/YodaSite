<?php

namespace yoda\Http\Middleware;

use Closure;
use yoda\User;

class Status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param Illuminate\Auth\Events\Login $login
     * @return mixed
     */
    public function setLoginStatut($login)
    {
        session(['status' => $login->user->getStatus()]);
    }
}
