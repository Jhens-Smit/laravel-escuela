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
            <input type="text" name="fk_alumno" value="{{old('fk_alumno',$inscripcion->fk_alumno)}}"> <br>
            @error("fk_alumno")
                <small>*{{$message}}</small>
            @enderror
        </label><br>
        <label>
            ID_profesor:
            <input type="text" name="fk_profesor" value="{{old('fk_profesor',$inscripcion->fk_profesor)}}"> <br>
            @error("fk_profesor")
                <small>*{{$message}}</small>
            @enderror
        </label><br>
        <label>
            ID_Asignatura:
            <input type="text" name="fk_asignatura" value="{{old('fk_asignatura',$inscripcion->fk_asignatura)}}"> <br>
            @error("fk_asignatura")
                <small>*{{$message}}</small>
            @enderror
        </label><br>
        <label>
            Fecha:
            <input type="text" name="fecha" value="{{old('fecha',$inscripcion->fecha)}}"> <br>
            @error("fecha")
                <small>*{{$message}}</small>
            @enderror
        </label>
    <br>
    <button type="submit">Editar Inscripcion</button>
    <a href="{{route('inscripcion.index')}}">Volver</a>
</form>
</body>
</html>