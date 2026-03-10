<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
        {
        return view('admin.dashboard');
        }

public function ventas()
{

$ventas = Venta::with('cliente')->get();

return view('admin.ventas',compact('ventas'));

}

public function resumenDiario()
{

$resumen = DB::table('ventas')
->select('forma_pago', DB::raw('SUM(total) as total'))
->whereDate('fecha_venta', today())
->groupBy('forma_pago')
->get();

return view('admin.resumen',compact('resumen'));

}

}
