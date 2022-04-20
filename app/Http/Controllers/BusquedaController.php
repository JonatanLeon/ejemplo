<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class BusquedaController extends Controller
{
    public function buscar(Request $request) {
        $peliculas = Pelicula::where('titulo', 'like', '%'.$request->buscar.'%')->get();

        foreach ($peliculas as $pelicula) {
            echo $pelicula->titulo."<br>";
        }
    }
}
