<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle;
class DetallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle = detalle::all();
        return response()->json($detalle,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('detalle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $detalle = new Detalle();
      $detalle->genero= $request->input('genero');
      $detalle->situacion_sentimental= $request->input('situacion_sentimental');
      $detalle->fecha_nacimiento= $request->input('fecha_nacimiento');
      $detalle->usuario_id= $request->input('usuario_id');
      $detalle->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json($detalle, 200);
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
      $detalle->genero= $request->input('genero');
      $detalle->situacionSentimental= $request->input('situacion_sentimental');
      $detalle->fecha_nacimiento= $request->input('fecha_nacimiento');
      $detalle->fk_usuario_id= $request->input('usuario_id');
      $detalle->save();
      return response()->json($detalle, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
