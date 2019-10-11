<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Cliente;
use app\Models\Empleado;
use app\Models\Provedor;


class CalificacionController extends Controller
{
    public function index()
    {

     $cliente = Cliente::find(1);
     //return $cliente->calificaciones;
     return csrf_token();
}
  public function store()
  {
    $cliente = Cliente::find(1);

    $cliente->calificaciones()->create([
       'calificacion' => 4,
    ]);

  }

  public function index2()
  {
     $empleado = Empleado::find(1);
     return $empleado->calificaciones;
     //return csrf_token();

  }
   public function store2()
   {
   	 $empleado = Empleado::find(1);

   	 $empleado->calificaciones()->createMany([
        [
          'calificacion' => 4,
        ],
        [
          'calificacion' => 4,
        ],
        [
          'calificacion' => 4,
        ]

   	 ]);
   }
     public function index3()
    {
    	$provedor = Provedor::find(1);
    	return $provedor->calificaciones;
    	//return csrf_token();
    } 

    public function store3()
    {
    	$provedor = Provedor::find(1);

        $provedor->calificaciones()->createMany([
        	[
        	   'calificacion' => 1,
        	],
        	[
        		'calificacion' => 2,
        	],
        	[
        		'calificacion' => 3,
        	],
        	[
        		'calificacion' => 2,
        	],
        ]);
    }
}

}