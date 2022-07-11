@extends('plantilla')

@section('titulo')
    Agregar Piezas
@endsection

@section('contenido')

    <form action="{{ route('piezas.store') }}" method="POST">
        @csrf
        <input type="text" name="marca" placeholder="Ingrese la marca" value="{{ old('marca') }}" required/>
        <input type="text" name="modelo" placeholder="Ingrese el modelo" value="{{ old('modelo') }}" required/>
        <input type="text" name="tipo" placeholder="Ingrese el tipo" value="{{ old('tipo') }}" required/>
        
        <input type="text" name="precio" placeholder="Ingrese su precio" value="{{ old('precio') }}" required/>
        <input type="text" name="ref" placeholder="Ingrese la referencia" value="{{ old('ref') }}" required/>
        
        <button type="submit">Enviar</button>
    </form>

    
@endsection