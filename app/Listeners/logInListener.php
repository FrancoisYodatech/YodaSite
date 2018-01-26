<?php

namespace yoda\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Auth\Events\Login;
use yoda\Http\Middleware\Status;

class logInListener
{
    /**
     * Create the event listener.
     * @param Login $login
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Login $login)
    {
      Status::setLoginStatut($login);
    }
}
