<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <title>Registro de Vuelo</title>
</head>
<body>
    <form action="{{ route('fly.Store') }}" method="POST">
        @csrf
        <h1>FORMULARIO VUELO</h1>

        <h2>Destino:</h2>
        <select name="destination_id">
            @foreach($destinations as $destination)
                <option value="{{ $destination->id }}">{{ $destination->desc }}</option>
            @endforeach
        </select>

        <h2>Aerolínea:</h2>
        <select name="airline_id">
            @foreach($airlines as $airline)
                <option value="{{ $airline->id }}">{{ $airline->desc }}</option>
            @endforeach
        </select>

        <h2>Sala de Abordaje:</h2>
        <input type="text" name="salaabordaje">

        <h2>Hora de Partida:</h2>
        <input type="time" step="1" name="horasalida">

        <h2>Hora de Llegada:</h2>
        <input type="time" step="1" name="horallegada">

        <br><br>
        <button type="submit">Enviar</button>

    </form>
</body>
</html>
