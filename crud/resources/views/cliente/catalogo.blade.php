@extends('layouts.cliente')

@section('contenido')

<h2 class="text-center mb-4">CapyCrunch - Menú</h2>

<div class="row">

@foreach($productos as $p)

<div class="col-md-3">

<div class="card shadow mb-4">

<div class="card-body text-center">

<h4>{{ $p->nombre }}</h4>

<p>Precio: ${{ $p->precio }}</p>

<p>Disponibles: {{ $p->stock }}</p>

</div>

</div>

</div>

@endforeach

</div>

@endsection