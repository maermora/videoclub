@extends('layouts.master')
@section('content')
     <div class="row">
            <div class="col-sm-4">  
               <img src="{{$arrayPeliculas['poster']}}" style="height:400px"/>
            </div>   
            <div class="col-sm-8"> 
                <h1>{{$arrayPeliculas['title']}} </h1> <br>
                <h5>{{$arrayPeliculas['year']}}</h5>
                <h5>{{$arrayPeliculas['director']}}</h5>
                <b>Resumen: </b><p>{{$arrayPeliculas['synopsis']}}</p>
                @if($arrayPeliculas['rented'])
                    <button type="button" class="btn btn-primary">Rentar pelicula</button>
                @else
                    <button type="button" class="btn btn-danger">Devolver pelicula</button>
                @endif
                <a class="btn btn-warning" href="/catalog/edit/{{$arrayPeliculas['title']}}" role="button">
                    <i class="fas fa-pencil-alt"></i> Editar Pelicula
                </a>
                <a class="btn btn-light" href="/catalog" role="button">
                    <i class="fas fa-arrow-left"></i> Volver al listado
                </a>
            </div> 
     </div>
@stop
