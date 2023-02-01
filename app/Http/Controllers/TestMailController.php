<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\TestMail;
use Illuminate\Http\Request;

class TestMailController extends Controller
{
    public function index(){
        
        // $data = ['name'=>'Amit Raz', 'data'=>'Welcome mail'];
        // $user['to'] = 'raz.amit2001@gmail.com'; 

        // Mail::send('emails.testmail', $data, function($messages) use ($user){
        //     $messages->to($user['to']);
        //     $messages->subject("Hello Dev");
        // });
        Mail::to('raz.amit2001@gmail.com')->send(new TestMail());
    }
}
