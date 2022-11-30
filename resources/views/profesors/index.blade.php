<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola bienvenidos a inicio de profesores</h1>
    <a href="{{route('profesor.create')}}">insertar profesor</a>
    <div>
        <table class="table table-striped">
            <thead>
                <th>ID:</th>
                <th>Nombre:</th>
                <th>Apellido:</th>
                <th>Dirección:</th>
                <th>Fecha de Nacimiento:</th>
                <th>Nivel Academico:</th>
            </thead>
            <tbody>
                @foreach ($profesor as $profesores)
                    <tr>
                        <td>{{$profesores->id_profesor}}</td>
                        <td>{{$profesores->nombre}}</td>
                        <td>{{$profesores->apellido}}</td>
                        <td>{{$profesores->direccion}}</td>
                        <td>{{$profesores->fecha_nacimiento}}</td>
                        <td>{{$profesores->nivel_academ}}</td>
                        <td><a href="{{route('profesor.edit',$profesores)}}">editar</a></td>
                        
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