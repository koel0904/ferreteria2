@extends('plantilla')

@section('titulo')
    Agregar Clientes
@endsection

@section('contenido')

    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Ingrese el nombre" value="{{ old('nombre') }}" required/>
        <input type="text" name="ape" placeholder="Ingrese apellidos" value="{{ old('ape') }}" required/>
        <input type="text" name="sex" placeholder="Ingrese el sexo" value="{{ old('sex') }}" required/>
        <input type="text" name="edad" placeholder="Ingrese la edad" value="{{ old('edad') }}" required/>
        <input type="text" name="tel" placeholder="Ingrese el teléfono" value="{{ old('tel') }}" required/>
        
        <button type="submit">Enviar</button>
    </form>

    
@endsection