@extends('plantilla')

@section('titulo')
    Edicion de Equipos
@endsection

@section('contenido')
    <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="marca" placeholder="Ingrese su marca" value="{{ old('marca',$equipo->marca) }}" required/>
        <input type="text" name="modelo" placeholder="Ingrese su modelo" value="{{ old('modelo',$equipo->modelo) }}"/>
        <input type="text" name="tipo" placeholder="Ingrese su tipo" value="{{ old('tipo',$equipo->tipo) }}"/>
        <input type="text" name="precio" placeholder="Ingrese su precio" value="{{ old('precio',$equipo->precio) }}"/>
        <input type="text" name="ref" placeholder="Ingrese su Referencia" value="{{ old('ref',$equipo->ref) }}"/>
        <button type="submit">Enviar</button>
    </form>
@endsection