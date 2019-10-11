<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empelado;
use App\Models\direccion;

class EmpleadoController extends Controller
{

    public function index()
    {
      $empleado = Empleado::with('direccion')->first();
      return $empleado;
      //return csrf_token();
    }

    public function store(Request $request)
    {
      $empleado = new Empleado();

      $empleado->nombre = 'juan barreto';
      $empleado->telefono = '2456734';

      $empleado->save();

      $direccion = new direccion();

      $direccion->ubicacion = 'Carrera 11A # 25C-67';
      $direccion->barrio = 'Las colinas';
      $direccion->ciudad = 'Sincelejo';

      $cliente->direccion()->save($direccion);

      return 'Se guardo correctamente';
    }
    
}
