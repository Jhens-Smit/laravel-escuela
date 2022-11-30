<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Insertar una nuevo inscripción</h1>
    <form action="{{route('inscripcion.store')}}" method="POST">
        @csrf
        <label>
            ID_Alumno:
            <input type="text" name="fk_alumno"> <br> <br>
        </label>
        <label>
            ID_profesor:
            <input type="text" name="fk_profesor"> <br><br>
        </label>
        <label>
            ID_Asignatura:
            <input type="text" name="fk_asignatura"> <br><br>
        </label>
        <label>
            Fecha:
            <input type="date" name="fecha"> <br>
        </label>
    <br>
    <button type="submit">Insertar nuevo alumno</button>
</form>
</body>
</html>