<?php

namespace App\Http\Controllers;

use App\Models\Alumno; // Asegúrate de importar el modelo
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $datos = Alumno::all(); // Obtén todos los registros de la tabla tb_alumnos
        return view('welcome')->with('datos', $datos);
    }

    public function create (Request $request){
        return $request->txtnombre;

    }
}
