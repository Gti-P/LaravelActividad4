@extends('layouts.admin')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
</head>
<body>
    <h1>Agregar Galleta</h1>

<form action="{{ route('productos.store') }}" method="POST">

@csrf

<input type="text" name="nombre" placeholder="Nombre"><br>

<input type="text" name="descripcion" placeholder="Descripcion"><br>

<input type="number" name="precio" placeholder="Precio"><br>

<input type="number" name="stock" placeholder="Stock"><br>

<button type="submit">Guardar</button>

</form>
</body>
</html>