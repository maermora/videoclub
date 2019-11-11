@extends('layouts.master')
@section('content')
     <div class="row">
            <div class="col-sm-4">  
               <img src="{{$peliculas->poster}}" style="height:400px"/>
            </div>   
            <div class="col-sm-8"> 
                <h1>{{$peliculas->title}} </h1> <br>
                <h5>{{$peliculas->year}}</h5>
                <h5>{{$peliculas->director}}</h5>
                <b>Resumen: </b><p>{{$peliculas->synopsis}}</p>
                @if($peliculas->rented)
                    <button type="button" class="btn btn-danger">Devolver pelicula</button>
                @else
                    <button type="button" class="btn btn-primary">Rentar pelicula</button>
                @endif
                <a class="btn btn-warning" href="/catalog/edit/{{$peliculas->id}}" role="button">
                    <i class="fas fa-pencil-alt"></i> Editar Pelicula
                </a>
                <a class="btn btn-light" href="/catalog" role="button">
                    <i class="fas fa-arrow-left"></i> Volver al listado
                </a>
            </div> 
     </div>
@stop
