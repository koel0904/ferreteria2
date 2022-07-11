<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\TiendasController;
use App\Http\Controllers\PiezasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers;
use App\Http\Controllers\CoordinadoresController;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/equipos', function () {
    return view('equipos');
});

Route::get('/plantilla', function () {
    return view('plantilla');
});

Route::get('/piezas', function () {
    return view('piezas');
});

Route::get('/proveedores', function () {
    return view('proveedores');
});

Route::get('/empleados', function () {
    return view('empleados');
});

Route::get('/clientes', function () {
    return view('clientes');
});

//1. Rita que CARGA EL FORMULARIO
Route::get('alumnos',[AlumnosController::class,'create']);
//2. Ruta del post que PROCESA EL FORMULARIO
Route::post('estudiantes',[AlumnosController::class,'store']);

//EQUIPOS
Route::resource('equipos','EquiposController');

Route::get('equipos', [EquiposController::class, 'create']);

Route::get('equipos', [EquiposController::class, 'store']);

Route::get('equipos', [EquiposController::class, 'index']);

//EQUIPOS.VIEWS
Route::get('/lista_equipo', function () {
    return view('lista_equipo');
});

Route::get('/agregar_equipo', function () {
    return view('agregar_equipo');
});

Route::get('/editar_equipo', function () {
    return view('editar_equipo');
});



//PIEZAS

Route::resource('piezas','ClientesController');

Route::get('piezas', [ClientesController::class, 'create']);

Route::get('piezas', [ClientesController::class, 'store']);

Route::get('piezas', [ClientesController::class, 'index']);


//PIEZAS.VIEWS
Route::get('/lista_pieza', function () {
    return view('lista_pieza');
});

Route::get('/agregar_pieza', function () {
    return view('agregar_pieza');
});

Route::get('/editar_pieza', function () {
    return view('editar_pieza');
});

//CLIENTES

Route::resource('clientes','ClientesController');

Route::get('clientes', [ClientesController::class, 'create']);

Route::get('clientes', [ClientesController::class, 'store']);

Route::get('clientes', [ClientesController::class, 'index']);


//CLIENTES.VIEWS
Route::get('/lista_cliente', function () {
    return view('lista_cliente');
});

Route::get('/lista_clienteJefe', function () {
    return view('lista_clienteJefe');
});

Route::get('/agregar_cliente', function () {
    return view('agregar_cliente');
});

Route::get('/editar_cliente', function () {
    return view('editar_cliente');
});


//Proveedores

Route::resource('tiendas','TiendasController');

Route::get('tiendas', [TiendasController::class, 'create']);

Route::get('tiendas', [TiendasController::class, 'store']);

Route::get('tiendas', [TiendasController::class, 'index']);


//Proveedores.VIEWS
Route::get('/lista_tienda', function () {
    return view('lista_tienda');
});

Route::get('/agregar_tienda', function () {
    return view('agregar_tienda');
});

Route::get('/editar_tienda', function () {
    return view('editar_tienda');
});

//EMPLEADOS

Route::resource('empleados','EmpleadosController');

Route::get('empleados', [EmpleadosController::class, 'create']);

Route::get('empleados', [EmpleadosController::class, 'store']);

Route::get('empleados', [EmpleadosController::class, 'index']);


//EMPLEADOS.VIEWS
Route::get('/lista_empleado', function () {
    return view('lista_empleado');
});

Route::get('/agregar_empleado', function () {
    return view('agregar_empleado');
});

Route::get('/editar_empleado', function () {
    return view('editar_empleado');
});
