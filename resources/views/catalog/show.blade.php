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
                <a class="btn btn-danger" href="/catalog/return/{{$peliculas->id}}" role="button">
                    <i class="fas fa-minus"></i> Devolver pelicula
                </a>
                @else
                <a class="btn btn-primary" href="/catalog/rent/{{$peliculas->id}}" role="button">
                    <i class="fas fa-plus"></i> Rentar pelicula
                </a>
                @endif
                <a class="btn btn-warning" href="/catalog/edit/{{$peliculas->id}}" role="button">
                    <i class="fas fa-pencil-alt"></i> Editar Pelicula
                </a>
                <a class="btn btn-light" href="/catalog" role="button">
                    <i class="fas fa-arrow-left"></i> Volver al listado
                </a>
                <a class="btn btn-danger" href="/catalog" role="button">
                    <i class="fas fa-times"></i> Eliminar pelicula
                </a>
            </div> 
     </div>
@stop
