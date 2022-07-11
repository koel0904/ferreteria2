<?php

namespace App\Http\Controllers;

use App\Equipos;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // MOSTRAR UNA PÁGINA DE INICIO, PRINCIPAL, LISTA DE ASPIRANTES (SELECT *) ---> GET
        $equipos=Equipos::all();
        return view('lista_equipo', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DEVOLVER UNA VISTA FORMULARIO CON EL QUE SE CREARÁ EL ASPIRANTE, VISTA QUE TIENE EL FORM --> GET
        return view('agregar_equipo'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $datos)
    {
        // GUARDAR LOS DATOS PROCESADOS DE UN FORMULARIO ---> POST
        Equipos::create($datos->all());
        return redirect()->route('equipos.store')->with('mensaje','Equipo agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Equipos $equipo)
    {
        // MOSTRAR LOS DATOS/INFORMACIÓN DE UN ASPIRANTE EN ESPECIFICO
        return view('detalle_equipo',compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipos $equipo)
    {
        // DEVOLVER UN FORMULARIO CON LOS DATOS PRECARGADOS PARA EDITARLO --> GET 
        return view('editar_equipo',compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $datos, Equipos $equipo)
    {
        // ACTUALIZAR LOS DATOS EN LA BD CON LA INFO DEL FORMULARIO --->UPDATE
        $equipo->update($datos->all());
        return redirect()->route('equipos.store')->with('mensaje', 'El equipo fue actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipos $equipo)
    {
        // ELIMINA UN ASPIRANTE DE LA BD 
        $equipo->delete();
        return back()->with('mensaje','El equipo ha sido eliminado correctamente');
    }
}
