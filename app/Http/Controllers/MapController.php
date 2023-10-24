<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function showMap()
    {
        // Aquí puedes personalizar la lógica para cargar datos o configuraciones del mapa
        // Luego, devuelve la vista del mapa

        return view('map');
    }
}
