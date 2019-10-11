<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Provedor;
use App\Models\Producto;

class ProvedorController extends Controller
{
    public function index ()
    {
      $empleado = Empleado::with('provedor')->first();
      return $empleado;
    }

    public function store (Request $request)
    {
         $empleado = empleado::find(1);

         $empleado->provedor()->saveMany([
             new provedor([
                'fecha' => '2019-09-1'
             ]),
             new provedor([
                'fecha' => '2019-08-14'
            ]),
            new provedor([
                'fecha' => '2019-09-24'
            ]),
         ]);

         return "provedor guardado con exito";
    }

    public function storeAttach(Request $request)
    {
        $provedor = Provedor::find(1);
       
        $provedor->productos()->attach([1,2]);
        //$factura->productos()->attach([3]);

        return "Se guardaron los 2 productos del provedor 1";
    }

    public function storeSync(Request $request)
    {
        $provedor = Provedor::find(2);
       
        $provedor->productos()->sync([1,2]);
        //$factura->productos()->sync([3]);

        return "Se guardaron los 2 productos del provedor 2";
    }
}
