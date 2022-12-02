<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar alumno</h1>
    <form action="{{route('alumno.update',$alumno)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="nombre" value="{{$alumno->nombre}}"> <br> <br>
        </label>
        <label>
            Apellidos:
            <input type="text" name="apellido" value="{{$alumno->apellido}}"> <br><br>
        </label>
        <label>
            Dirección:
            <input type="text" name="direccion" value="{{$alumno->direccion}}"> <br><br>
        </label>
        <label>
            Fecha de Nacimiento:
            <input type="text" name="fecha_nacimiento" value="{{$alumno->fecha_nacimiento}}"> <br>
        </label>
    <br>
    <button type="submit">Editar alumno</button>
</form>
</body>
</html>