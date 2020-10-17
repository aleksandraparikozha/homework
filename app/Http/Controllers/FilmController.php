<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\DB;



class FilmController extends Controller
{
    public function index(){
        $films = Film::all();

        return view('films')->with('films', $films);


    }
    public function show($id){
        $film = Film::findOrfail($id);

        return view('film')->with('film', $film);
    }

    public function create(){
        return view('create');
    }

    public function save(Request $request){


        $film = new Film($request->all());


        $film->save();

        return redirect()->back();


    }

    public function edit($filmId){

        return view('edit')->with('filmId', $filmId);

    }
    public function update(Request $request, $filmId){
        $film = Film::findOrfail($filmId);

        $film->update($request->all());





    }

    public function delete($id){
        $film = Film::findOrfail($id);

        $film->delete();

        return redirect()->back();


    }

}
