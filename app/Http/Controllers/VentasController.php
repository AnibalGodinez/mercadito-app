<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentasController extends Controller
{
    // Mostrar todas las ventas
    public function index()
    {
        $ventas = Venta::all(); // obtenemos todas las ventas
        return view('ventas.index', compact('ventas'));
    }
}
