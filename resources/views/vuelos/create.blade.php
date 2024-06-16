<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Registro de Vuelo</title>
</head>
<body>
    <form action="{{ route('fly.Store') }}" method="POST">
        @csrf
        <h1>FORMULARIO VUELO</h1>

        <h1>Destino:</h1>
        <select name="destination_id">
            @foreach($destinations as $destination)
                <option value="{{ $destination->id }}">{{ $destination->desc }}</option>
            @endforeach
        </select>
        <h1>Aerolinea</h1> 
        <select name="airline_id">
            @foreach($airlines as $airline)
                <option value="{{ $airline->id }}">{{ $airline->desc }}</option>
            @endforeach
        </select>

        <h1>Sala de Abordaje</h1>
        <input type="text" name="salaabordaje">

        <h1>Hora de Partida</h1>
        <input type="time" step="1" name="horasalida">

        <h1>Hora de llegada</h1>
        <input type="time" step="1" name="horallegada">

        <button type="submit">Enviar</button>

    </form>
</body>
</html>