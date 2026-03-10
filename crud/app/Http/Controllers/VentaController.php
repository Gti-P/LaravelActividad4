<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\Venta;
use App\Models\DetalleVenta;

class VentaController extends Controller
{
    public function crearVenta()
    {
        $productos = Producto::all();
        return view('cliente.venta', compact('productos')); 
    }

    public function guardarVenta(Request $request)
{

    $cliente = Cliente::create([
        'nombre' => $request->nombre,
        'telefono' => $request->telefono
    ]);

    $total = 0;

    $productosSeleccionados = $request->productos;

    $detalles = [];

    foreach ($productosSeleccionados as $id => $cantidad) {

        if ($cantidad > 0) {

            $producto = Producto::find($id);

            if (!$producto) {
                continue;
            }

            $subtotal = $producto->precio * $cantidad;

            $total += $subtotal;

            $detalles[] = [
                'producto' => $producto,
                'cantidad' => $cantidad
            ];
        }
    }

    $venta = Venta::create([
        'id_cliente' => $cliente->id,
        'total' => $total,
        'forma_pago' => $request->forma_pago,
        'estado_pago' => $request->forma_pago == 'credito' ? 'pendiente' : 'pagado',
        'fecha_venta' => now()
    ]);

    foreach ($detalles as $d) {

        DetalleVenta::create([
            'id_venta' => $venta->id_venta,
            'id_producto' => $producto->id_producto,
            'cantidad' => $cantidad,
            'precio_unitario' => $producto->precio,
            'subtotal' => $producto->precio * $cantidad
        ]);

        // actualizar inventario
        $d['producto']->stock -= $d['cantidad'];
        $d['producto']->save();

        $producto = Producto::find($producto_id);
    }
    foreach($request->productos as $producto_id => $cantidad){

        if($cantidad > 0){

        $producto = Producto::find($producto_id);

        if($producto->stock < $cantidad){

        return back()->with('error',
        "No hay suficiente inventario para ".$producto->nombre);

        }

        $subtotal = $producto->precio * $cantidad;

        DetalleVenta::create([
        'id_venta'=>$venta->id_venta,
        'id_producto'=>$producto_id,
        'cantidad'=>$cantidad,
        'precio_unitario'=>$producto->precio,
        'subtotal'=>$subtotal
        ]);

        $producto->stock -= $cantidad;
        $producto->save();

        }
        }    
    return redirect()->route('admin.ventas');
}
}