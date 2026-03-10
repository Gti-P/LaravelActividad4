<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function catalogo()
    {
        $productos = Producto::all();
        return view('cliente.catalogo', compact('productos'));
    }

    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }
}