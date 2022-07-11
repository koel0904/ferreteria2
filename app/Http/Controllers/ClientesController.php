<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // MOSTRAR UNA PÁGINA DE INICIO, PRINCIPAL, LISTA DE ASPIRANTES (SELECT *) ---> GET
        $clientes=Clientes::all();
        return view('lista_cliente', compact('clientes'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DEVOLVER UNA VISTA FORMULARIO CON EL QUE SE CREARÁ EL ASPIRANTE, VISTA QUE TIENE EL FORM --> GET
        return view('agregar_cliente'); 
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
        Clientes::create($datos->all());
        return redirect()->route('clientes.store')->with('mensaje','Cliente agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $cliente)
    {
        // MOSTRAR LOS DATOS/INFORMACIÓN DE UN ASPIRANTE EN ESPECIFICO
        return view('detalle_cliente',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientes $cliente)
    {
        // DEVOLVER UN FORMULARIO CON LOS DATOS PRECARGADOS PARA EDITARLO --> GET 
        return view('editar_cliente',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $datos, Clientes $cliente)
    {
        // ACTUALIZAR LOS DATOS EN LA BD CON LA INFO DEL FORMULARIO --->UPDATE
        $cliente->update($datos->all());
        return redirect()->route('clientes.store')->with('mensaje', 'El Cliente fue actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $cliente)
    {
        // ELIMINA UN ASPIRANTE DE LA BD 
        $cliente->delete();
        return back()->with('mensaje','El Cliente ha sido eliminado correctamente');
    }
}
