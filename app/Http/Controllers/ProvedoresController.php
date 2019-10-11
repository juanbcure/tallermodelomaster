<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\Producto;

class ProveedorController extends Controller
{
    public function index ()
    {
      $proveedor = Proveedor::with('productos')->first();
      return $proveedor;
    }

    public function store (Request $request)
    {
         $proveedor = new Proveedor();

         $proveedor->nombre = 'Agricolas de Sucre';
         $proveedor->direccion = 'Calle 56 # 15-67';
         $proveedor->telefono = '2804532';
         
         $proveedor->save();

         $proveedor->productos()->createMany([
            [
                'descripcion' => 'Granos y Arroz',
                'precio' => 2000,
                'categoria' => 'Canasta Familiar'
            ],
            [
                'descripcion' => 'Tuberculos',
                'precio' => 4000,
                'categoria' => 'Canasta Familiar'
            ],
            [
                'descripcion' => 'Verduras',
                'precio' => 8000,
                'categoria' => 'Canasta Familiar'
            ],
         ]);

         return "Proveedor y Producto guardadas con exito";
    }
}
