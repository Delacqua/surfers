<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;
use Request;
 
class MailController extends Controller
{
    public function send()
    {
    	$name = Request::input('name');
    	$email = Request::input('email');
    	$place = Request::input('place');
    	$birthday = Request::input('birthday');
		$phone = Request::input('phone');
		$message = Request::input('message');


        $objDemo = new \stdClass();
        $objDemo->name = $name;
        $objDemo->email = $email;
        $objDemo->place = $place;
        $objDemo->birthday = $birthday;
        $objDemo->phone = $phone;
        $objDemo->message = $message;
        $objDemo->sender = 'test@test.com';
        $objDemo->receiver = 'Surfers Co';
 
        Mail::to("delacqua@gmail.com")->send(new Email($objDemo));
        
        if (Mail::failures()) {

            }

        }
}