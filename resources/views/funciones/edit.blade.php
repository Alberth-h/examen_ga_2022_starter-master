<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear funcion</title>
</head>
<body>
    @if(Session::has('exito'))
        <p>{{Session::get('exito')}}</p>
    @endif
    @if(Session::has('error'))
        <p>{{Session::get('error')}}</p>
    @endif
    <h1>Editar Funcion</h1>
    <a href="{{route('funciones.index')}}">Regresar</a>
    <form method="post" action="{{route('funciones.update', $funcion->id)}}">
        @csrf
        @method('put')
        <label>Pelicula</label>
        <input name="pelicula" type="text" value="{{$funcion->pelicula}}">
        <label>Fecha</label>
        <input name="fecha" type="date" value="{{$funcion->fecha}}">>
        <label>Hora</label>
        <input name="hora" type="time" value="{{$funcion->hora}}">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>