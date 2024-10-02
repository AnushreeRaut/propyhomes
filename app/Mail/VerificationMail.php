<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $verification_code;

    public function __construct($user, $verification_code)
    {
        $this->user = $user;
        $this->verification_code = $verification_code;
    }

    public function build()
    {
        return $this->view('emails.verification')
                    ->with([
                        'user' => $this->user,
                        'verification_code' => $this->verification_code,
                    ]);
    }
}
