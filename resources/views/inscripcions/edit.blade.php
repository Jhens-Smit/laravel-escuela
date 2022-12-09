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
        <h1>Editar inscripción</h1>
        <img src="data:image/png;base64,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" alt="">
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
        <button type="submit">Editar Inscripcion</button><br><br>
        <a href="{{route('inscripcion.index')}}">Volver</a>
    </form>
    </center>
    
</body>
</html>