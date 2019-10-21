<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
}
