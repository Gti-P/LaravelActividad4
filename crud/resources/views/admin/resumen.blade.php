@extends('layouts.admin')

@section('contenido')

<h2>Resumen Diario</h2>

<table class="table table-bordered mt-3">

<thead class="table-dark">

<tr>

<th>Forma de pago</th>
<th>Total vendido</th>

</tr>

</thead>

<tbody>

@foreach($resumen as $r)

<tr>

<td>{{ $r->forma_pago }}</td>

<td>${{ $r->total }}</td>

</tr>

@endforeach

</tbody>

</table>

@endsection