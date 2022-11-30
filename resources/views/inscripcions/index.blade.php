<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola bienvenidos a inicio de Inscripciones</h1>
    <a href="{{route('inscripcion.create')}}">insertar inscripción</a>
    <div>
        <table class="table table-striped">
            <thead>
                <th>ID_inscripción:</th>
                <th>ID_Alumno:</th>
                <th>ID_Profesor:</th>
                <th>ID_Asignatura:</th>
                <th>Fecha:</th>
            </thead>
            <tbody>
                @foreach ($inscripcion as $inscripciones)
                    <tr>
                        <td>{{$inscripciones->id_inscripcion}}</td>
                        <td>{{$inscripciones->fk_alumno}}</td>
                        <td>{{$inscripciones->fk_profesor}}</td>
                        <td>{{$inscripciones->fk_asignatura}}</td>
                        <td>{{$inscripciones->fecha}}</td>
                        <td><a href="{{route('inscripcion.edit',$inscripciones)}}">editar</a></td>
                        
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