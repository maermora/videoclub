<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movie;
class CatalogController extends Controller
{


    public function getIndex(){
        $peliculas = DB::table('movies')->get();
        return view('catalog.index', array('peliculas'=>$peliculas));
    }
    public function getShow($id){
        $peliculas = DB::table('movies')->where('id',$id)->first();
        return view('catalog.show', array('peliculas'=>$peliculas));
       // return view('catalog.show', array('arrayPeliculas'=>$this->arrayPeliculas[$id]));
        
    }
    public function getCreate(){
        return view('catalog.create');
        
    }
    public function getEdit($id){
        $peliculas = DB::table('movies')->where('id',$id)->first();
        return view('catalog.edit', array('peliculas'=>$peliculas));     
    }
    public function postCreate(Request $request){
        $newMovie = new Movie;
        $newMovie->title = $request->input('title');
        $newMovie->year = $request->input('year');
        $newMovie->director = $request->input('director');
        $newMovie->poster = $request->input('poster');
        $newMovie->synopsis = $request->input('synopsis');
        $newMovie->save();
        return redirect()->action('CatalogController@getIndex');


    }
    public function putEdit(Request $request,$id){
        $editMovie = Movie::FindOrFail($id);
        $editMovie->title = $request->input('title');
        $editMovie->year = $request->input('year');
        $editMovie->director = $request->input('director');
        $editMovie->poster = $request->input('poster');
        $editMovie->synopsis = $request->input('synopsis');
        $editMovie->save();
        return redirect()->action('CatalogController@getShow',$id);
        
        
    }
}
