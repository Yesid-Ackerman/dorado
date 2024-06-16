<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Panel de Administracion</h1>
    <header>
        <h1>Crear Pasajero-Formulario de Registro</h1>
    </header>
    
    <form action="{{route('pass.Store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <h1>Identificacion</h1>
        <input type="string" name="dni">

        <h1>Nombres</h1>
        <input type="string" name="names">

        <h1>Apellidos</h1>
        <input type="string" name="lnames">

        <h1>E-mail</h1>
        <input type="email" name="email">

        <h1>Telefono</h1>
        <input type="string" name="phone">

        <h1>Codigo de Vuelo</h1>
        <select name="codefly">
               @foreach($flies as $codefly)
                    <option value="{{ $codefly->codefly }}">{{ $codefly->codefly }}</option>
                @endforeach
        </select>
<br>
        <h1>Subir Foto</h1>
        <input type="file" name="photo">

        <button type="submit">Enviar Registro</button>

    </form>

</body>
</html>