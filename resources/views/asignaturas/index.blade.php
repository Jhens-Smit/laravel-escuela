<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{'/'}}">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{route('asignatura.index')}}">Asignatura</a>
              <a class="nav-link" href="{{route('alumno.index')}}">Alumno</a>
              <a class="nav-link" href="{{route('profesor.index')}}">Profesor</a>
              <a class="nav-link" href="{{route('inscripcion.index')}}" tabindex="-1" aria-disabled="true">Inscripción</a>
            </div>
          </div>
        </div>
      </nav>
      <center>
        <h2 style="color:rgb(6, 100, 107)">Lista de Asignaturas</h2>
        <img src="https://cdn-icons-png.flaticon.com/512/5780/5780875.png" alt="" width="100 px" height="100 px">
      </center>

    <nav class="navbar navbar-light bg-light">

      <a class="navbar-brand" href="{{route('asignatura.create')}}"> <center><b> Insertar Nueva Asignatura</b>
        <img src="https://e7.pngegg.com/pngimages/986/1024/png-clipart-computer-icons-plus-sign-plus-sign-logo-cross.png" alt="" width="30" height="30">
      </a>
    </center>
  </nav>
    <div>
        <table class="table table-striped">
            <thead>
                <th>ID:</th>
                <th>Nombre:</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($asignatura as $asignaturas)
                    <tr>
                        <td>{{$asignaturas->id_asignatura}}</td>
                        <td>{{$asignaturas->nombre}}</td>
                        <td><nav class="navbar navbar-light bg-light">
                          <a class="navbar-brand" href="{{route('asignatura.edit',$asignaturas)}}"> <center><b>Editar</b>
                            <img src="https://e7.pngegg.com/pngimages/336/551/png-clipart-computer-icons-symbol-encapsulated-postscript-edit-miscellaneous-angle-thumbnail.png" alt="" width="30" height="30">
                          </a>
                        </center>
                      </nav></td>  
                      <td><nav class="navbar navbar-light bg-light">
                        <form action="{{route('asignatura.destroy',$asignaturas)}}" method="POST">
                          @csrf
                          @method('delete')
                          <button class="navbar-brand" type="submit"> <center><b>Eliminar</b>
                            <img src="https://cdn-icons-png.flaticon.com/512/2907/2907762.png" alt="" width="30" height="30">
                          </button>
                        </form>
                      </center>
                    </nav></td> 
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