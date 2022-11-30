<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Insertar una nuevo Profesor</h1>
    <form action="{{route('profesor.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="nombre"> <br> <br>
        </label>
        <label>
            Apellidos:
            <input type="text" name="apellido"> <br><br>
        </label>
        <label>
            Dirección:
            <input type="text" name="direccion"> <br><br>
        </label>
        <label>
            Fecha de Nacimiento:
            <input type="date" name="fecha_nacimiento"> <br><br>
        </label>
        <label>
            Nivel academico:
            <input type="text" name="nivel_academ"> <br><br>
        </label>
    <br>
    <button type="submit">Insertar nuevo Profesor</button>
</form>
</body>
</html>