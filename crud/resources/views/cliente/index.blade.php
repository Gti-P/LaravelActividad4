@extends('layouts.cliente')

@section('content')

<h2 class="text-center mb-4">Menú de Galletas</h2>

<div class="row">

@foreach($galletas as $g)

<div class="col-md-3 mb-4">

<div class="card shadow">

<div class="card-body text-center">

<h4>{{ $g->sabor }}</h4>

<p>Disponibles: {{ $g->stock }}</p>

<form action="/comprar" method="POST">

@csrf

<input type="hidden" name="id" value="{{ $g->id }}">

<input type="number"
name="cantidad"
class="form-control mb-2"
placeholder="Cantidad"
required>

<button class="btn btn-success w-100">
Comprar
</button>

</form>

</div>

</div>

</div>

@endforeach

</div>

@endsection