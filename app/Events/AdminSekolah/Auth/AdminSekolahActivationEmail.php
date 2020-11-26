<?php

namespace App\Events\AdminSekolah\Auth;

use App\AdminSekolah;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AdminSekolahActivationEmail
{
    use Dispatchable, SerializesModels;

    public $adminsekolah;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(AdminSekolah $adminSekolah)
    {
        
        $this->adminsekolah = $adminSekolah;
    }

}
