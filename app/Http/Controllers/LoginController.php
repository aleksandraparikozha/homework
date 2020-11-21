<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('User.login');
    }

    public function postLogin(Request $request)
    {

        $credentials = $request->except(['_token']);

        if (Auth::attempt($credentials)) {
            return redirect()->route('my_films');

        } else {
            abort(403);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function user_create(){


        return view('user_create');


    }

    public function save_user(Request $request){

        $user = new User($request->all());
        $user['password']=bcrypt('password123');
        $user->save();

        return redirect()->back();



//
//

    }


}
