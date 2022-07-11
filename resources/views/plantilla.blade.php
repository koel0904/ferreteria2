<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="paginas/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <title>@yield('titulo')</title>
    <!---include('layout.php')
    <style></style> --->
</head>
<body>
<!-- Copiar dentro del tag BODY -->

 

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
        
        <li><a href="http://127.0.0.1:8000/principal">Incio</a></li>
        <li><a href="http://127.0.0.1:8000/piezas">Piezas</a></li>
        <li><a href="/clientes">Clientes</a></li>
        <li><a href="http://127.0.0.1:8000/tiendas">Proveedores</a></li>
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
      <figcaption class="heading">LISTAS</figcaption>
      
      
      <!-- ################################################################################################ -->
    </figure>
  </div>

    @yield('contenido')
    

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