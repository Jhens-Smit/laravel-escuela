<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar la asignatura</h1>
    <form action="{{route('asignatura.update', $asignatura)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="nombre" value="{{old('nombre',$asignatura->nombre)}}"> <br>
        </label>
        @error('nombre')
            <small>*{{$message}}</small>
            <br>
        @enderror
    <br>
    <button type="submit">Editar asignatura</button>
    <a href="{{route('asignatura.index')}}">Volver</a>
</form>
</body>
</html>