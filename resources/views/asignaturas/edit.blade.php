<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Editar la asignatura</h1>
        <img src="https://tresorderecursos.com/wp-content/uploads/2020/06/Checklist-icon.png" alt="">
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
        <button type="submit">Editar asignatura</button><br><br>
        <a href="{{route('asignatura.index')}}">Volver</a>
    </form>
    </center>
    
</body>
</html>