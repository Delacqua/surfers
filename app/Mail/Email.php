<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class Email extends Mailable
{
    use Queueable, SerializesModels;
     
    public $obj;
 
    public function __construct($obj)
    {
        $this->obj = $obj;
    }
 
    public function build()
    {
        return $this->from('test@test.com')
                    ->view('emailmodel')
                    ->text('emailmodel_plain');
    }
}
