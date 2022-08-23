<?php
  
namespace App\Mail;
   
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
  
class MyTestMail extends Mailable 
{
    use Queueable, SerializesModels;
  
    public $details;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details,$username)
    {
        $this->details = $details;
        $this->username=$username;
    }
   
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('mail')->with(['token'=>$this->details['token']]);
        return $this->view('mail')->with(['token'=>$this->details , 'username'=>$this->username]);
        //return '<p><a href = "http://localhost:8000/verify/{{ $token }}">{{token}} </a> to verify</p>'+$this->details['token'];
    }
}

