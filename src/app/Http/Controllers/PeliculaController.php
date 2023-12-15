<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function Index(){
        $titulo = "listado de mis peliculas";

        return view('pelicula.index', [
            'titulo' => $titulo
        ]);
    }
}
