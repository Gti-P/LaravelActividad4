<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>CapyCrunch</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-warning">

<div class="container">

<a class="navbar-brand" href="/cliente">🍪 CapyCrunch</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav me-auto">

<li class="nav-item">
<a class="nav-link" href="/cliente">Catálogo</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/venta">Comprar</a>
</li>

</ul>

<ul class="navbar-nav">

<li class="nav-item">
<a class="btn btn-dark" href="/">
Administrador
</a>
</li>

</ul>

</div>

</div>

</nav>

<div class="container mt-4">

@yield('contenido')

</div>
@if(session('error'))

<div class="alert alert-danger">
{{ session('error') }}
</div>

@endif
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>