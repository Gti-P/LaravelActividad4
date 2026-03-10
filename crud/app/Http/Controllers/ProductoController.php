<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
public function index()
{
    $productos = \App\Models\Producto::all();
    return view('productos.index', compact('productos'));
}

public function create()
{
    return view('productos.create');
}

public function store(Request $request)
{
    \App\Models\Producto::create($request->all());
    return redirect()->route('productos.index');
}

public function agregarStock(Request $request)
{

    $producto = Producto::find($request->id_producto);

    $producto->stock += $request->cantidad;

    $producto->save();

    return redirect()->back()->with('success','Inventario actualizado');

}
}
