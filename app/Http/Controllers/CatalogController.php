<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movie;
use Notification;
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
        notify('Pelicula creada correctamente')->type('success');
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
        notify('Pelicula editada correctamente')->type('success');
        return redirect()->action('CatalogController@getShow',$id);

    }
    public function putRent(Request $request,$id){
        $rentMovie = Movie::FindOrFail($id);
        $rentMovie->rented = '1';
        $rentMovie->save();
        notify('Pelicula rentada correctamente')->type('success');
        return redirect()->action('CatalogController@getShow',$id);
    }
    public function putReturn(Request $request,$id){
        $rentMovie = Movie::FindOrFail($id);
        $rentMovie->rented = '0';
        $rentMovie->save();
        notify('Pelicula devuelta correctamente')->type('success');
        return redirect()->action('CatalogController@getShow',$id);
    }
    public function deleteMovie(Request $request,$id){
        $rentMovie = Movie::FindOrFail($id);
        $rentMovie->delete();
        notify('Pelicula eliminada correctamente')->type('success');
        return redirect()->action('CatalogController@getIndex');
    }
}
