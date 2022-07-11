<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // MOSTRAR UNA PÁGINA DE INICIO, PRINCIPAL, LISTA DE ASPIRANTES (SELECT *) ---> GET
        $empleados=Empleados::all();
        return view('lista_empleado', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DEVOLVER UNA VISTA FORMULARIO CON EL QUE SE CREARÁ EL ASPIRANTE, VISTA QUE TIENE EL FORM --> GET
        return view('agregar_empleado'); 
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
        Empleados::create($datos->all());
        return redirect()->route('empleados.store')->with('mensaje','Empleado agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleado)
    {
        // MOSTRAR LOS DATOS/INFORMACIÓN DE UN ASPIRANTE EN ESPECIFICO
        return view('detalle_empleado',compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleados $empleado)
    {
        // DEVOLVER UN FORMULARIO CON LOS DATOS PRECARGADOS PARA EDITARLO --> GET 
        return view('editar_empleado',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $datos, Empleados $empleado)
    {
        // ACTUALIZAR LOS DATOS EN LA BD CON LA INFO DEL FORMULARIO --->UPDATE
        $empleado->update($datos->all());
        return redirect()->route('empleados.store')->with('mensaje', 'El empleado fue actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleados $empleado)
    {
        // ELIMINA UN ASPIRANTE DE LA BD 
        $empleado->delete();
        return back()->with('mensaje','El empleado ha sido eliminado correctamente');
    }
}
