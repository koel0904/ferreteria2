<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ejemplo/pag2.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;700;900&display=swap" rel="stylesheet">
<head>
    
    <title>PSI PLATAFORMA</title>

    
    
    <!-- BOTON PROFILE Y LOGOUT -->
    <style type="text/css">
      .boton_1{
      
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    
    color: #ffffff;
    background-color: #e08c1c;
    border-radius: 6px;
    border: 2px solid #000000;
    width: 50px;
  }
  .boton_1:hover{
    color: #1883ba;
    background-color: #ffffff
  }
        
      }
      .boton_1:hover {
      background-color: #008CBA;
      color: white;
 }
    </style>
  <div class="contenido-buscar">
      
      <a>

        <div class="boton_1" style="float: right;">
          <!-- Account Management -->
          <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
              {{ __('Perfil') }}
          </x-jet-responsive-nav-link>
  
          @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
              <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                  {{ __('API Tokens') }}
              </x-jet-responsive-nav-link>
          @endif
  
        
        </div>

        <div class="boton_1" style="float: right;">
            <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <x-jet-dropdown-link href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                          this.closest('form').submit();">
              {{ __('Salir') }}
          </x-jet-dropdown-link>
      </form>
        </div>

      </a>
     <br>
     <br>
     <br>
     <br>
     <br>

      
      
    </div>
</head>

<body>
  
  
    

    <!--- HEADER ---->
    <header class="site-header" >
        <div class="contenedor contenido-header">
            <div class="barra" align="center">
                <a >
                    <img src="ejemplo/img/psilogo.png" alt="logo">
                </a>
                <br>
                <br>

                
                <nav class="navegacion">
                
                
                
                    
                </nav>
                
                
            </div>

            
        </div>
    </header>

    

    <div class="snip1265 " >
        <div class="plan">
            <header><i class="ion-android-contacts"></i>
            <br>
            <h4 class="plan-title">
            Equipo
            </h4>
    </header>
    <br>
    <ul class="plan-features">
      <li>Lista de los equipos atendidos por PSI. 
      </li>
      <br>
      <br>
    
      
    </ul>
    <div class="plan-select"><a href="http://127.0.0.1:8000/equipos">Ingresar</a></div>
  </div>

  <div class="plan">
    <header><i class="ion-wrench"></i>
    <br>
      <h4 class="plan-title">
        Piezas
      </h4>
    </header>
    <br>
    <ul class="plan-features">
      <li>Piezas o repuestos disponibles en el almacén
      </li>
      <br>
      <br>
      
    </ul>
    <div class="plan-select"><a href="http://127.0.0.1:8000/piezas">Ingresar</a></div>

  </div>


  <div class="plan">
    <header><i class="ion-ios-people"></i>
    <br>
      <h4 class="plan-title">
        Clientes
      </h4>
    </header>
    <br>
    <ul class="plan-features">
      <li>Clientes que cuentan con nuestros servicios. 
      </li>
      <br>
      <br>
    </ul>
    <div class="plan-select"><a href="http://127.0.0.1:8000/clientes">Ingresar</a></div>
  </div>
  <div class="plan">
    <header><i class="ion-ios-book"></i>
    <br>
      
      <h4 class="plan-title">
        Proveedores
      </h4>
      
    </header>
    <br>
    <ul class="plan-features">
      <li>Proveedores de piezas y equipos afiliados a PSI.
      </li>
      <br>
      <br>
      
    </ul>
    <div class="plan-select"><a href="http://127.0.0.1:8000/tiendas">Ingresar</a></div>
</div>

<div class="plan">
  <header><i class="ion-wrench"></i>
  <br>
    <h4 class="plan-title">
      Empleados
    </h4>
  </header>
  <br>
  <ul class="plan-features">
    <li>Empleados de PSI.
    </li>
    <br>
    <br>
    
  </ul>
  <div class="plan-select"><a href="http://127.0.0.1:8000/empleados">Ingresar</a></div>
</div>
 
