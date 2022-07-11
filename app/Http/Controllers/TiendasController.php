<?php

namespace App\Http\Controllers;

use App\Tiendas;
use Illuminate\Http\Request;

class TiendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // MOSTRAR UNA PÁGINA DE INICIO, PRINCIPAL, LISTA DE ASPIRANTES (SELECT *) ---> GET
        $tiendas=Tiendas::all();
        return view('lista_tienda', compact('tiendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DEVOLVER UNA VISTA FORMULARIO CON EL QUE SE CREARÁ EL ASPIRANTE, VISTA QUE TIENE EL FORM --> GET
        return view('agregar_tienda'); 
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
        Tiendas::create($datos->all());
        return redirect()->route('tiendas.store')->with('mensaje','Proveedor agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tiendas $tienda)
    {
        // MOSTRAR LOS DATOS/INFORMACIÓN DE UN ASPIRANTE EN ESPECIFICO
        return view('detalle_tienda',compact('tienda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tiendas $tienda)
    {
        // DEVOLVER UN FORMULARIO CON LOS DATOS PRECARGADOS PARA EDITARLO --> GET 
        return view('editar_tienda',compact('tienda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $datos, Tiendas $tienda)
    {
        // ACTUALIZAR LOS DATOS EN LA BD CON LA INFO DEL FORMULARIO --->UPDATE
        $tienda->update($datos->all());
        return redirect()->route('tiendas.store')->with('mensaje', 'El proveedor fue actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiendas $tienda)
    {
        // ELIMINA UN ASPIRANTE DE LA BD 
        $tienda->delete();
        return back()->with('mensaje','El proveedor ha sido eliminado correctamente');
    }
}
