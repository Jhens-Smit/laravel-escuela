<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <center>
        <h1>Insertar una nueva asignatura</h1>
        <img src="https://cdn-icons-png.flaticon.com/512/5526/5526535.png" alt="">
        <form action="{{route('asignatura.store')}}" method="POST">
            @csrf
            <label>
                Nombre:
                <input type="text" name="nombre" value="{{old('nombre')}}"> <br>
            </label>
            @error('nombre')
                
                <small>*{{$message}}</small>
                <br>
            @enderror
        <br>
        <button type="submit">Insertar nueva asignatura</button><br><br>
        <a href="{{route('asignatura.index')}}">Volver</a>
    </form>
    </center>
    
</body>
</html>