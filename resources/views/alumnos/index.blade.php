@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{'/home'}}">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" aria-current="page" href="{{route('asignatura.index')}}">Asignatura</a>
              <a class="nav-link active" href="{{route('alumno.index')}}">Alumno</a>
              <a class="nav-link" href="{{route('profesor.index')}}">Profesor</a>
              <a class="nav-link" href="{{route('inscripcion.index')}}" tabindex="-1" aria-disabled="true">Inscripción</a>
            </div>
          </div>
          <form class="d-flex">
            <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
    
    <center>
      <h2 style="color:rgb(6, 100, 107)">Lista de Alumnos</h2>
      <img src="https://cdn-icons-png.flaticon.com/512/354/354637.png" alt="" width="100 px" height="100 px">
    </center>
    <center><br>
    <div class="container">
      
        <h5>Consultar DNI</h5>
        <input type="text" id="documento">
        <button class="btn btn-outline-danger btn-sm" id="buscar">Buscar</button><br> <br>
        <input type="text" id="apellidoPaterno" placeholder="apellido paterno"> <br>
        <input type="text" id="apellidoMaterno" placeholder="apellido materno"><br>
        <input type="text" id="nombre" placeholder="nombres">
    </div>   
  </center>
    <nav class="navbar navbar-light bg-light">

          <a class="navbar-brand" href="{{route('alumno.create')}}"> <center><b> Insertar Nuevo Alumno</b>
            <img src="https://e7.pngegg.com/pngimages/986/1024/png-clipart-computer-icons-plus-sign-plus-sign-logo-cross.png" alt="" width="30" height="30">
          </a>
        </center>
      </nav>
    <div class="divc">
        <table class="table table-striped">
            <thead>
                <th>ID:</th>
                <th>Nombre:</th>
                <th>Apellido:</th>
                <th>Dirección:</th>
                <th>Fecha de Nacimiento:</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($alumno as $alumnos)
                    <tr>
                        <td>{{$alumnos->id_alumno}}</td>
                        <td>{{$alumnos->nombre}}</td>
                        <td>{{$alumnos->apellido}}</td>
                        <td>{{$alumnos->direccion}}</td>
                        <td>{{$alumnos->fecha_nacimiento}}</td>
                        <td><nav class="navbar navbar-light bg-light">
                            <a class="navbar-brand" href="{{route('alumno.edit',$alumnos)}}"> <center><b>Editar</b>
                              <img src="https://e7.pngegg.com/pngimages/336/551/png-clipart-computer-icons-symbol-encapsulated-postscript-edit-miscellaneous-angle-thumbnail.png" alt="" width="30" height="30">
                            </a>
                          </center>
                        </nav>  <td>       
                          <td><nav class="navbar navbar-light bg-light">
                            <form action="{{route('alumno.destroy',$alumnos)}}" method="POST">
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
<script>
  $('#buscar').click(function(){
      dni=$('#documento').val();
      $.ajax({
          url:'api.php',
          type:'post',
          data:'dni='+dni,
          dataType:'json',
          success:function(r){
          if (r.numeroDocumento==dni){
              $('#apellidoPaterno').val(r.apellidoPaterno);
              $('#apellidoMaterno').val(r.apellidoMaterno);
              $('#nombre').val(r.nombres);
          }else{
              alert(r.e);
          }
          }
      })
  })
</script>
</html>
<?php
/*{{route('asignatura.edit', ['asignatura' => $asignaturas->id_asignatura])}}*/
?>
@endsection