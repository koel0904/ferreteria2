@extends('plantilla')

@section('titulo')
    Detalles de Empleados
@endsection

@section('contenido')
    <h1>Detalle de los Empleados</h1>
    <p>Nombre: {{ $empleado->nombre}}</p>
    <p>Apellidos: {{ $empleado->ape}}</p>
    <p>Sexo: {{ $empleado->sex}}</p>
    <p>Edad: {{ $empleado->edad}}</p>
    <p>Teléfono: {{ $empleado->tel}}</p>
@endsection


