<?php
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PeliculaController;
use App\Http\Middleware;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    echo"<h1>Hola Mundo</h1>";
});

//Route::get('/peliculas/{pagina?}', [PeliculaController::class, 'Index']);
Route::get('/peliculas/{pagina?}', [PeliculaController::class, 'Index'])->name('Index');
Route::get('/redirigir', [PeliculaController::class, 'redirigir'])->name('redirigir');
Route::get('/detalle/{year?}', [PeliculaController::class, 'detalle'])->name('detalle')->middleware('testyear');


Route::resource('usuario', 'App\Http\Controllers\UsuarioController');

Route::get('/mostrar-fecha',function(){
    $titulo = "estoy mostrando la fecha";
    return view('mostrar-fecha', array(
        'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo}',function($titulo ='No hay pelicula '){
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));

Route::get('/listado-peliculas', function(){

    $titulo = "Listado de películas";
    $listado = array('Batman','Spiderman', 'Gran Torino');

    return view('peliculas.listado')
        ->with('titulo', $titulo)
        ->with('listado', $listado);
});

Route::get('/pagina-generica', function () {
    return view('pagina');
});

