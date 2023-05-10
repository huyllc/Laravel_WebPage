<?php

namespace App\Mail;

use App\Models\User;
use App\Models\EmailVerification;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $token;

    public function __construct(User $user, $token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    public function build()
    {
        return $this->markdown('emails.email-verification')
                    ->with([
                        'name' => $this->user->name,
                        'verifyLink' => url('/verify-email/' . $this->token),
                    ])
                    ->subject('Verify Your Email Address')
                    ->action('Verify Email', route('verify-email', ['token' => $this->token]));
    }
}
