<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class APICatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Movie::all());
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $m = Movie::create($request->all());
        return response()->json($m);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Movie::findOrFail($id));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $m = Movie::findOrFail($id);
        $m->fill($request->all());
        $m->save();
        return response()->json(['error' => false, 'msg' => 'La pelicula ha sido actualizada']);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $m = Movie::findOrFail($id);
        $m->delete();
        return response()->json(['error' => false, 'msg' => 'La pelicula ha sido eliminada']);
        //
    }
    public function putRent($id){
        $m = Movie::findOrFail($id);
        $m->rented = 1;
        $m->save();
        return response()->json(['error' => false, 'msg' => 'La pelicula ha sido rentada']);
    }
    public function putReturn($id){
        $m = Movie::findOrFail($id);
        $m->rented = 0;
        $m->save();
        return response()->json(['error' => false, 'msg' => 'La pelicula ha sido devuelta']);
    }
}
