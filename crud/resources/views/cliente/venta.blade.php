@extends('layouts.cliente')

@section('contenido')

<div class="card shadow">

<div class="card-header bg-warning">
<h4>Registrar Venta - CapyCrunch</h4>
</div>

<div class="card-body">

<form method="POST" action="/venta/guardar">

@csrf

<div class="row">

<div class="col-md-6 mb-3">
<label>Nombre Cliente</label>
<input type="text" name="nombre" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Teléfono</label>
<input type="text" name="telefono" class="form-control" required>
</div>

</div>

<hr>

<h5>Seleccionar galletas</h5>

<table class="table table-bordered">

<thead class="table-dark">

<tr>
<th>Sabor</th>
<th>Precio</th>
<th>Cantidad</th>
</tr>

</thead>

<tbody>

@foreach($productos as $p)

<tr>

<td>
<strong>{{ $p->nombre }}</strong>
</td>

<td>
$ {{ number_format($p->precio,0) }}
</td>

<td>

<input 
type="number" 
name="productos[{{ $p->id_producto }}]" 
class="form-control"
min="0"
value="0">

</td>

</tr>

@endforeach

</tbody>

</table>

<div class="mb-3">

<label>Forma de pago</label>

<select name="forma_pago" class="form-control">

<option value="efectivo">Efectivo</option>
<option value="transferencia">Transferencia</option>
<option value="credito">Crédito</option>

</select>

</div>

<button class="btn btn-success" >
Registrar Venta
</button>

</form>

</div>

</div>

@endsection