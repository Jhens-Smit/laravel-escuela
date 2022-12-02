<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar inscripción</h1>
    <form action="{{route('inscripcion.update',$inscripcion)}}" method="POST">
        @csrf
        @method('put')
        <label>
            ID_Alumno:
            <input type="text" name="fk_alumno" value="{{$inscripcion->fk_alumno}}"> <br> <br>
        </label>
        <label>
            ID_profesor:
            <input type="text" name="fk_profesor" value="{{$inscripcion->fk_profesor}}"> <br><br>
        </label>
        <label>
            ID_Asignatura:
            <input type="text" name="fk_asignatura" value="{{$inscripcion->fk_asignatura}}"> <br><br>
        </label>
        <label>
            Fecha:
            <input type="text" name="fecha" value="{{$inscripcion->fecha}}"> <br>
        </label>
    <br>
    <button type="submit">Editar Inscripcion</button>
</form>
</body>
</html>