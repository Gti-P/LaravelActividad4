@extends('layouts.admin')

@section('contenido')

<h3>Inventario de Galletas</h3>

<table class="table table-striped">

<thead class="table-dark">
<tr>
<th>Producto</th>
<th>Precio</th>
<th>Stock</th>
<th>Agregar</th>
</tr>
</thead>

<tbody>

@foreach($productos as $p)

<tr>

<td>{{ $p->nombre }}</td>

<td>$ {{ number_format($p->precio,0) }}</td>

<td>

@if($p->stock <= 5)
<span class="badge bg-danger">{{ $p->stock }}</span>
@else
<span class="badge bg-success">{{ $p->stock }}</span>
@endif

</td>

<td>

<form action="{{ url('/admin/inventario/agregar') }}" method="POST" class="d-flex">
@csrf

<input type="hidden" name="id_producto" value="{{ $p->id_producto }}">

<input type="number" name="cantidad" class="form-control me-2" placeholder="Cantidad">

<button class="btn btn-primary btn-sm">
Agregar
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

@endsection