<!DOCTYPE html>
<!--
Template Name: Fluffster
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Fluffster</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="paginas/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <section>
      
      <div>
        <a >
          <img src="ejemplo/img/psilogo.png" alt="logo">
      </a>
      </div>
      
    </section>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      
      
      <li><a href="http://127.0.0.1:8000/piezas">Piezas</a></li>
      <li><a href="http://127.0.0.1:8000/clientes">Clientes</a></li>
      <li><a href="http://127.0.0.1:8000/proveedores">Proveedores</a></li>
      <li><a href="http://127.0.0.1:8000/empleados">Empleados</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div id="pageintro" class="wrapper row1 bgded" style="background-image:url('images/fondo-principal.jpg');">
  <figure class="hoc clear"> 
    <!-- ################################################################################################ -->
    <figcaption class="heading">EQUIPOS</figcaption>
    
    <!-- ################################################################################################ -->
  </figure>
</div>

<div>

    <h1>Lista de Equipos</h1>
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
                <td><a href="{{ route('equipos.edit', $equipo->id)}}">Editar</a></td>
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
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - Derechos Reservados - <a href="#">PSI</a></p>
    
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>