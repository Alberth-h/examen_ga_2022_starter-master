<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear funcion</title>
</head>
<body>
    <h1>Nueva Funcion</h1>
    <a href="{{route('funciones.index')}}">Regresar</a>
    <form method="post" action="{{route('funciones.store')}}">
        @csrf
        <label>Pelicula</label>
        <input name="pelicula" type="text">
        <label>Fecha</label>
        <input name="fecha" type="date">
        <label>Hora</label>
        <input name="hora" type="time">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>