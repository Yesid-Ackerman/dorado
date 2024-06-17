<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Pasajero - Formulario de Registro</title>
</head>
<body>
    <h1>Panel de Administración</h1>
    <h2>Crear Pasajero - Formulario de Registro</h2>
    
    <form action="{{ route('pass.Store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <h3>Identificación</h3>
        <input type="text" name="dni">

        <h3>Nombres</h3>
        <input type="text" name="names">

        <h3>Apellidos</h3>
        <input type="text" name="lnames">

        <h3>E-mail</h3>
        <input type="email" name="email">

        <h3>Teléfono</h3>
        <input type="text" name="phone">

        <h3>Código de Vuelo</h3>
        <select name="codefly">
            @foreach($flies as $fly)
                <option value="{{ $fly->codefly }}">{{ $fly->codefly }}</option>
            @endforeach
        </select>

        <br>
        <h3>Subir Foto</h3>
        <input type="file" name="photo">

        <br><br>
        <button type="submit">Enviar Registro</button>

    </form>

</body>
</html>
