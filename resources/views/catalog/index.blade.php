@extends('layouts.master')
@section('content')
     <div class="row">
          @foreach( $peliculas as $key => $pelicula )
          <div class="col-xs-6 col-sm-4 col-md-3 text-center"> 
               <a href="/catalog/show/{{$pelicula->id}}"> 
                   <img src="{{$pelicula->poster}}" style="height:150px"/>  
                       <h4 style="min-height:45px;margin:5px 0 10px 0">  
                           {{$pelicula->title}}</h4>  
               </a>        
          </div>       
          @endforeach 
     </div>
@stop
<!--<h1>Listado peliculas</h1>-->