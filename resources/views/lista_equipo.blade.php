@extends('plantilla')

@section('titulo')
    Bienvenido a Equipos
@endsection

@section('contenido')
    <h1>Lista de Equipos</h1>
    <script LANGUAGE="JavaScript">
        function Entrar(password) {
        var passvalido = "1234";
        if(password == passvalido){
        window.location="http://127.0.0.1:8000/equipos/1/edit";
        }else{
        window.location="http://127.0.0.1:8000/principal";
        }
        }
    </script>
    <link rel="stylesheet" href="assets/css/main2.css">
    <nav class="navegacion">
        <a href="http://127.0.0.1:8000/principal">VOLVER A INICIO</a>   
        
    </nav>
    <a href="{{ route('equipos.create')}}">AGREGAR EQUIPOS</a>
    @if(session()->has('mensaje'))
    <p style="color: red">{{ session('mensaje') }}</p>
    @endif
    <table class="container">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Referencia</th>
        </tr>
        @foreach ($equipos as $equipo)
            <tr>
                <td>{{ $equipo->marca }}</td>
                <td>{{ $equipo->modelo }}</td>
                <td>{{ $equipo->tipo }}</td>
                <td>{{ $equipo->precio }}</td>
                <td>{{ $equipo->ref }}</td>
                <td><a href="{{ route('equipos.show', $equipo->id)}}">Ver ficha</a></td>
                <td>
                    <form>
                        <p><input type="password" name="palabra" size="25"> <input type="button" value="EDITAR"
                        onClick="Entrar(this.form.palabra.value)" name="button"> </p>
                        </form>
                </td>
                <td>
                    <form action="{{ route('equipos.destroy', $equipo->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

