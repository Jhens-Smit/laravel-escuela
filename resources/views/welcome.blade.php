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
        <h1>Institución Educativa</h1>   


        <img src="data:image/jpeg;base64,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" alt="">
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