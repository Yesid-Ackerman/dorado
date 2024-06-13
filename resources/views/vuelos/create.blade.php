<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <H1 class="text-red">HOLA DESDE CREATE</H1>
    <form action="{{ route('fly.Store') }}" method="POST">

        <h1>FORMULARIO VUELO</h1>

        <h1>Codigo de Vuelo</h1>
        <input type="int" name="codefly">

        <h1>Codigo de Destino</h1>
        <input type="int">

        <h1>Codigo de Aerolinea</h1>
        <input type="int">

        <h1>Sala de Abordaje</h1>
        <input type="text" name="salaabordaje">

        <h1>Hora de Partida</h1>
        <input type="time" name="horasalida">

        <h1>Hora de llegada</h1>
        <input type="time" name="horallegada">

        <button type="submit">Enviar</button>

    </form>
</body>
</html>