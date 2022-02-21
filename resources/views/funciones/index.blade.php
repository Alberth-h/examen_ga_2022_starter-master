<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <h1>Lista de funciones</h1>
    @if(Session::has('exito'))
        <p>{{Session::get('exito')}}</p>
    @endif
    @if(Session::has('error'))
        <p>{{Session::get('error')}}</p>
    @endif
    <a href="{{route('funciones.create')}}">Nueva Funcion</a>
    <table>
        <thead>
            <tr>
                <th>Pelicula</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($funciones as $funcion)
                <tr>
                    <td>{{$funcion->pelicula}}</td>
                    <td>{{$funcion->fecha}}</td>
                    <td>{{$funcion->hora}}</td>
                    <td>
                        <form method="post" action="{{ route('funciones.destroy', $funcion->id) }}">
                            @csrf
                            @method('delete')
                            <a href="{{ route('funciones.edit', $funcion->id) }}">Editar</a>
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>