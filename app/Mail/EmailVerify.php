<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerify extends Mailable
{
    use Queueable, SerializesModels;

    
    public function __construct($name,$otp)
    {
        $this->name = $name;
        $this->otp = $otp;
    }

    public function build()
    {
        $user['name'] =  $this->name;
        $user['otp'] =  $this->otp;
        return $this->view('view.name')
        ->subject('Email Verification')
        ->view('template.email-verify', ['user' => $user]);
    }
}
