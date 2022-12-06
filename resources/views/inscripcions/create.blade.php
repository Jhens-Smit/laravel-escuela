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
            <input type="text" name="fk_alumno" value="{{old('fk_alumno')}}"> <br> 
            @error("fk_alumno")
                <small>*{{$message}}</small>
            @enderror
        </label><br>
        <label>
            ID_profesor:
            <input type="text" name="fk_profesor" value="{{old('fk_profesor')}}"> <br>
            @error("fk_profesor")
                <small>*{{$message}}</small>
            @enderror
        </label><br>
        <label>
            ID_Asignatura:
            <input type="text" name="fk_asignatura" value="{{old('fk_asignatura')}}"> <br>
            @error("fk_asignatura")
                <small>*{{$message}}</small>
            @enderror
        </label><br>
        <label>
            Fecha:
            <input type="date" name="fecha" value="{{old('fecha')}}"> <br>
            @error("fecha")
                <small>*{{$message}}</small>
            @enderror
        </label>
    <br>
    <button type="submit">Insertar nuevo alumno</button>
</form>
</body>
</html>