<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function Index($pagina =1){
        $titulo = "Index listado de mis peliculas";

        return view('pelicula.index', [
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }
    
    public function detalle() {
        return view('pelicula.detalle');
    }
}
