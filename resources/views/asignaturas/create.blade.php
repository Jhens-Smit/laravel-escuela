<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Insertar una nueva asignatura</h1>
    <form action="{{route('asignatura.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="nombre"> <br>
        </label>
   
    <br>
    <button type="submit">Insertar nuevo formulario</button>
</form>
</body>
</html>