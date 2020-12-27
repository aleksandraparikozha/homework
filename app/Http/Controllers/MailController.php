<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function create(){
        return view('mail');
//        return new WelcomeMail();
    }
    public function send(Request $request){
//        Mail::raw('Hello', function ($message){
//            $message->to(request('mail'))
//                ->subject('Hi');
//        });
        $data = [
            'text'=>'This is a Welcome message',
            'name'=>'Test',
            'link'=>'https://ligaleague.github.io/'
        ];



        Mail::to(request('mail'))->send(new WelcomeMail($data));



        return redirect()->route('mails.create');

    }
}
