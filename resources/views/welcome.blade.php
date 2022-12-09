<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
        <div class="container-fluid">
          <a class="navbar-brand" href="{{'/'}}">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('asignatura.index')}}">Asignatura</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('alumno.index')}}">Alumno</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('profesor.index')}}">Profesor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('inscripcion.index')}}" tabindex="-1" aria-disabled="true">Inscripción</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <center>
        <h1>Bienvenidos</h1>   


        <img class="image" src="https://cdn-icons-png.flaticon.com/512/1916/1916027.png" alt="">
      </center>

</body>
</html>

<?php
     /*<h2>Lista de asignaturas registradas</h2>
        @foreach ($asignatura as $asignaturas)
        <ul>
            <li><b>id:</b> {{$asignaturas->id_asignatura}}</li>
            <li><b>Nombre:</b> {{$asignaturas->nombre}}</li>
        </ul>
        @endforeach
        <h2>Lista de profesores registrados</h2>
        @foreach ($profesor as $asignaturas)
        <ul>
            <li><b>id:</b> {{$asignaturas->id_profesor}}</li>
            <li><b>nombre:</b> {{$asignaturas->nombre}}</li>
            <li><b>apellido:</b> {{$asignaturas->apellido}}</li>
            <li><b>direccion:</b> {{$asignaturas->direccion}}</li>
            <li><b>fecha nacimiento:</b> {{$asignaturas->fecha_nacimiento}}</li>
            <li><b>nivel academico:</b>{{$asignaturas->nivel_academ}}</li>
        </ul>
        @endforeach
        <h2>Lista de alumnos registrados</h2>
        @foreach ($alumno as $asignaturas)
        <ul>
            <li><b>id:</b> {{$asignaturas->id_alumno}}</li>
            <li><b>nombre:</b>  {{$asignaturas->nombre}}</li>
            <li><b>apellido:</b> {{$asignaturas->apellido}}</li>
            <li><b>direccion:</b>  {{$asignaturas->direccion}}</li>
            <li><b>fecha nacimiento:</b> {{$asignaturas->fecha_nacimiento}}</li>
        </ul>
        @endforeach
        <h2>Lista de inscripciones registradas</h2>
        @foreach ($inscripcion as $asignaturas)
        <ul>
            <li><b>id:</b> {{$asignaturas->id_inscripcion}}</li>
            <li><b>id_alumno:</b>  {{$asignaturas->fk_alumno}}</li>
            <li><b>id_profesor:</b>  {{$asignaturas->fk_profesor}}</li>
            <li><b>id_asignatura:</b>  {{$asignaturas->fk_asignatura}}</li>
            <li><b>fecha nacimiento:</b>  {{$asignaturas->fecha}}</li>
        </ul>
        @endforeach*/
?>