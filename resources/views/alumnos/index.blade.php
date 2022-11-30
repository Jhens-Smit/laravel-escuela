<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola bienvenidos a inicio de alumnos</h1>
    <a href="{{route('alumno.create')}}">insertar alumno</a>
    <div>
        <table class="table table-striped">
            <thead>
                <th>ID:</th>
                <th>Nombre:</th>
                <th>Apellido:</th>
                <th>Dirección:</th>
                <th>Fecha de Nacimiento:</th>
            </thead>
            <tbody>
                @foreach ($alumno as $alumnos)
                    <tr>
                        <td>{{$alumnos->id_alumno}}</td>
                        <td>{{$alumnos->nombre}}</td>
                        <td>{{$alumnos->apellido}}</td>
                        <td>{{$alumnos->direccion}}</td>
                        <td>{{$alumnos->fecha_nacimiento}}</td>
                        <td><a href="{{route('alumno.edit',$alumnos)}}">editar</a></td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
/*{{route('asignatura.edit', ['asignatura' => $asignaturas->id_asignatura])}}*/
?>