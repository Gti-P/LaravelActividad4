@extends('layouts.admin')

@section('contenido')

<h2 class="mb-4">Panel Administrador - CapyCrunch</h2>

<div class="row">

<div class="col-md-3">

<div class="card shadow">

<div class="card-body text-center">

<h4>Inventario</h4>

<p>Gestionar sabores</p>

<a href="/inventario" class="btn btn-primary">
Abrir
</a>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow">

<div class="card-body text-center">

<h4>Ventas</h4>

<p>Registrar ventas</p>

<a href="/venta" class="btn btn-success">
Registrar
</a>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow">

<div class="card-body text-center">

<h4>Lista Ventas</h4>

<p>Ventas registradas</p>

<a href="/admin/ventas" class="btn btn-warning">
Ver
</a>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow">

<div class="card-body text-center">

<h4>Resumen</h4>

<p>Ventas del día</p>

<a href="/admin/resumen" class="btn btn-dark">
Abrir
</a>

</div>

</div>

</div>

</div>

@endsection