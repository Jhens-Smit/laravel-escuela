<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <center>
        <h1>Insertar una nuevo Profesor</h1>
        <img src="https://cdn-icons-png.flaticon.com/512/3750/3750020.png" alt="">
        <form action="{{route('profesor.store')}}" method="POST">
            @csrf
            <label>
                Nombre:
                <input type="text" name="nombre" value="{{old('nombre')}}"> <br>
                @error("nombre")
                    <small>*{{$message}}</small>
                @enderror
            </label><br>
            <label>
                Apellidos:
                <input type="text" name="apellido" value="{{old('apellido')}}"> <br>
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
            </label><br>
            <label>
                Nivel academico:
                <input type="text" name="nivel_academ" value="{{old('nivel_academ')}}"> <br>
                @error("nivel_academ")
                <small>*{{$message}}</small>
            @enderror
            </label>
        <br>
        <button type="submit">Insertar nuevo Profesor</button><br><br>
        <a href="{{route('profesor.index')}}">Volver</a>
    </form>
    </center>
    
</body>
</html>