<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function mostrarMensaje()
    {
        $mensaje = "¡Hola desde el controlador!";
        
        return response()->json(['mensaje' => $mensaje]);
    }
}