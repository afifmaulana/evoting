<?php

namespace App\Mail\AdminSekolah\Auth;

use App\AdminSekolah;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActivationEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $adminsekolah;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(AdminSekolah $adminSekolah)
    {
        $this->adminsekolah = $adminSekolah;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.auth.activation');
    }
}
