@extends('plantilla')

@section('titulo')
    Edicion de Empleados
@endsection

@section('contenido')
    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nombre" placeholder="Ingrese su nombre" value="{{ old('nombre',$empleado->nombre) }}" required/>
        <input type="text" name="ape" placeholder="Ingrese sus apellidos" value="{{ old('ape',$empleado->ape) }}"/>
        <input type="text" name="sex" placeholder="Ingrese su sexo" value="{{ old('sex',$empleado->sex) }}"/>
        <input type="text" name="edad" placeholder="Ingrese su edad" value="{{ old('edad',$empleado->edad) }}"/>
        <input type="text" name="tel" placeholder="Ingrese su teléfono" value="{{ old('tel',$empleado->tel) }}"/>
        <button type="submit">Enviar</button>
    </form>
@endsection