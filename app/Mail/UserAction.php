<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserAction extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $action;
    public $comp;

    public function __construct($user, $comp, $action)
    {
      $this -> user = $user;
      $this -> action = $action;
      $this -> comp = $comp;
    }
    public function build()
    {
        return $this->from('user@thissite.com')
                    ->view('mail.company_name');
    }
}
