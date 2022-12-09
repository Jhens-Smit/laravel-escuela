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
        <h1>Editar alumno</h1>
        <img src="https://cdn-icons-png.flaticon.com/512/1125/1125650.png" alt=""><br><br>
        <form action="{{route('alumno.update',$alumno)}}" method="POST">
            @csrf
            @method('put')
            <label>
                Nombre:
                <input type="text" name="nombre" value="{{old('nombre' ,$alumno->nombre)}}"> <br> 
                @error("nombre")
                    <small>*{{$message}}</small>
                @enderror
            </label><br>
            <label>
                Apellidos:
                <input type="text" name="apellido" value="{{old('apellido', $alumno->apellido)}}"> <br>
                @error("apellido")
                    <small>*{{$message}}</small>
                @enderror
            </label><br>
            <label>
                Dirección:
                <input type="text" name="direccion" value="{{old('direccion',$alumno->direccion)}}"> <br>
                @error("direccion")
                    <small>*{{$message}}</small>
                @enderror
            </label><br>
            <label>
                Fecha de Nacimiento:
                <input type="text" name="fecha_nacimiento" value="{{old('fecha_nacimiento', $alumno->fecha_nacimiento)}}"> <br>
                @error("fecha_nacimiento")
                    <small>*{{$message}}</small>
                @enderror
            </label>
        <br>
        <button type="submit">Editar alumno</button><br><br>
        <a href="{{route('alumno.index')}}">Volver</a>
    </form>
    </center>
    
</body>
</html>

