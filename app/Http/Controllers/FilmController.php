<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\DB;



class FilmController extends Controller
{
    public function index(){
        $films = Film::all();
        $users = User::all();

        return view('films')->with('films', $films)->with('users', $users);


    }
    public function show(Film $film){

        return view('film')->with('film', $film);
    }

    public function create(){


        return view('create');


    }

    public function save(Request $request){
        \request()->validate([
            'title' => 'required|min:2|unique:films',
            'director' => 'required',
            'rate' => 'required',
        ]);
        $user = auth()->user();
        $film = new Film($request->all());
        $film['user_id']=$user->id;

        $film->save();
        return redirect()->back();


    }

    public function edit(Film  $film){

        return view('edit')->with('film', $film);

    }


    public function update(Request $request, Film $film){

        $film->update($request->all());

        return redirect()->route('films');



    }

    public function delete(Film $film){

        $film->delete();

        return redirect()->back();


    }
    public function user_films(){
        $films = Film::all();
        $users = User::all();

        return view('my_films')->with('films', $films)->with('users', $users);


    }

}
