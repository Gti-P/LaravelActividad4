@extends('layouts.admin')

@section('contenido')

<div class="alert alert-info">
Total de ventas registradas: <strong>{{ $ventas->count() }}</strong>
</div>

<div class="row">

<div class="col-md-12">

<div class="card shadow">

<div class="card-header bg-dark text-white d-flex justify-content-between">

<h4 class="mb-0">Ventas Registradas</h4>

<a href="/venta" class="btn btn-success btn-sm">
Nueva venta
</a>

</div>

<div class="card-body">

<table class="table table-striped table-hover align-middle">

<thead class="table-dark">

<tr>

<th>#</th>
<th>Cliente</th>
<th>Total</th>
<th>Forma de pago</th>
<th>Estado</th>
<th>Fecha</th>

</tr>

</thead>

<tbody>

@foreach($ventas as $venta)

<tr>

<td>{{ $venta->id_venta }}</td>

<td>
<strong>{{ $venta->cliente->nombre }}</strong>
</td>

<td>
<span class="text-success fw-bold">
$ {{ number_format($venta->total,0) }}
</span>
</td>

<td>

@if($venta->forma_pago == 'efectivo')
<span class="badge bg-success">Efectivo</span>
@endif

@if($venta->forma_pago == 'transferencia')
<span class="badge bg-primary">Transferencia</span>
@endif

@if($venta->forma_pago == 'credito')
<span class="badge bg-warning text-dark">Crédito</span>
@endif

</td>

<td>

@if($venta->estado_pago == 'pagado')
<span class="badge bg-success">Pagado</span>
@else
<span class="badge bg-danger">Pendiente</span>
@endif

</td>

<td>{{ $venta->fecha_venta }}</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

</div>

</div>

@endsection