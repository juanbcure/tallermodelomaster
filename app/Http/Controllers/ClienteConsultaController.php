<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class ClienteConsultaController extends Controller
{
    public function index()
    {
    	$cliente = Cliente::with('detalles')->get();
    	return $cleinte;
    }

}
