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
                <form action="{{action('CatalogController@putReturn', $peliculas->id)}}" method="POST" style="display:inline">
                    {{ method_field('PUT') }} {{ csrf_field() }} <button type="submit" class="btn btn-danger" style="display:inline"> Devolver película </button>
                </form> 
                @else
                <form action="{{action('CatalogController@putRent', $peliculas->id)}}" method="POST" style="display:inline">
                    {{ method_field('PUT') }} {{ csrf_field() }} <button type="submit" class="btn btn-primary" style="display:inline"> Rentar película </button>
                </form>
                @endif
                <a class="btn btn-warning" href="/catalog/edit/{{$peliculas->id}}" role="button">
                    <i class="fas fa-pencil-alt"></i> Editar Pelicula
                </a>
                <a class="btn btn-light" href="/catalog" role="button">
                    <i class="fas fa-arrow-left"></i> Volver al listado
                </a>
                <form action="{{action('CatalogController@deleteMovie', $peliculas->id)}}" method="POST" style="display:inline">
                    {{ method_field('DELETE') }} {{ csrf_field() }} <button type="submit" class="btn btn-danger" style="display:inline"> Eliminar pelicula </button>
                </form>
            </div> 
     </div>
@stop
