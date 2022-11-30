<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola bienvenidos a inicio de asignatura</h1>
    <a href="{{route('asignatura.create')}}">insertar asignatura</a>
    <div>
        <table class="table table-striped">
            <thead>
                <th>ID:</th>
                <th>Nombre:</th>
            </thead>
            <tbody>
                @foreach ($asignatura as $asignaturas)
                    <tr>
                        <td>{{$asignaturas->id_asignatura}}</td>
                        <td>{{$asignaturas->nombre}}</td>
                        <td><a href="{{route('asignatura.edit',$asignaturas)}}">editar</a></td>
                        
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