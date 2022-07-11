@extends('plantilla')

@section('titulo')
    Agregar Proveedores
@endsection

@section('contenido')

    <form action="{{ route('tiendas.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Ingrese el nombre" value="{{ old('nombre') }}" required/>
        <input type="text" name="dire" placeholder="Ingrese dirección" value="{{ old('dire') }}" required/>
        <input type="text" name="tel" placeholder="Ingrese el teléfono" value="{{ old('tel') }}" required/>
        <input type="text" name="ref" placeholder="Ingrese la referencia" value="{{ old('ref') }}" required/>

        
        <button type="submit">Enviar</button>
    </form>

    
@endsection