<?php

namespace App\Http\Controllers;

use App\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // MOSTRAR UNA PÁGINA DE INICIO, PRINCIPAL, LISTA DE ASPIRANTES (SELECT *) ---> GET
        $proveedores=Proveedores::all();
        return view('lista_proveedor', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DEVOLVER UNA VISTA FORMULARIO CON EL QUE SE CREARÁ EL ASPIRANTE, VISTA QUE TIENE EL FORM --> GET
        return view('agregar_proveedor'); 
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
        Proveedores::create($datos->all());
        return redirect()->route('proveedores.store')->with('mensaje','Proveedor agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedores $proveedor)
    {
        // MOSTRAR LOS DATOS/INFORMACIÓN DE UN ASPIRANTE EN ESPECIFICO
        return view('detalle_proveedor',compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedores $proveedor)
    {
        // DEVOLVER UN FORMULARIO CON LOS DATOS PRECARGADOS PARA EDITARLO --> GET 
        return view('editar_proveedor',compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $datos, Proveedores $proveedor)
    {
        // ACTUALIZAR LOS DATOS EN LA BD CON LA INFO DEL FORMULARIO --->UPDATE
        $proveedor->update($datos->all());
        return redirect()->route('proveedores.store')->with('mensaje', 'El proveedor fue actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedores $proveedor)
    {
        // ELIMINA UN ASPIRANTE DE LA BD 
        $proveedor->delete();
        return back()->with('mensaje','El proveedor ha sido eliminado correctamente');
    }
}
