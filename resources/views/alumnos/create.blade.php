<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body> 
    <center>
    <h1>Insertar una nuevo alumno</h1>
    <img src="https://thumbs.dreamstime.com/b/nuevo-alumno-65505766.jpg" alt="">
    <form action="{{route('alumno.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="nombre" value="{{old('nombre')}}"><br>
            @error("nombre")
            <small>*{{$message}}</small>
        @enderror
        </label><br>
        
        <label>
            Apellidos:
            <input type="text" name="apellido" value="{{old('apellido')}}"><br> 
            @error("apellido")
            <small>*{{$message}}</small>
            @enderror
        </label><br>
        <label>
            Dirección:
            <input type="text" name="direccion" value="{{old('direccion')}}"> <br>
            @error("direccion")
                <small>*{{$message}}</small>
            @enderror
        </label><br>
        <label>
            Fecha de Nacimiento:
            <input type="date" name="fecha_nacimiento" value="{{old('fecha_nacimiento')}}"> <br>
            @error("fecha_nacimiento")
                <small>*{{$message}}</small>
            @enderror
        </label>
    <br>
    <button type="submit">Insertar nuevo alumno</button>    <br> <br>
    <a href="{{route('alumno.index')}}">Volver</a>
</center>
</form>
</body>
</html>