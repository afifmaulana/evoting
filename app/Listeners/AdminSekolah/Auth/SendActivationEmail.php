<?php

namespace App\Listeners\AdminSekolah\Auth;

use App\Events\AdminSekolah\Auth\AdminSekolahActivationEmail;
use App\Mail\AdminSekolah\Auth\ActivationEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendActivationEmail
{
    /**
     * Create the event listener.
     *
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
    public function handle(AdminSekolahActivationEmail $event)
    {
        if ($event->adminsekolah->active){
            return;
        }
        Mail::to($event->adminsekolah->email)->send(new ActivationEmail($event->adminsekolah));
    }
}
