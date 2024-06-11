<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola desde Pasajero</h1>

    <form action="{{route('fly.Store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>FORMULARIO VUELO</h1>

        <h1>Nombres</h1>
        <input type="string" name="names">

        <h1>Apellidos</h1>
        <input type="string" name="lnames">

        <h1>E-mail</h1>
        <input type="email" name="email">

        <h1>Telefono</h1>
        <input type="string" name="phone">

        <h1>Codigo de vuelo</h1>
        <input type="int" name="codvuelo">

        <h1>Foto</h1>
        <input type="file" name="photo">

        <button type="submit">Enviar Registro</button>

    </form>

</body>
</html>