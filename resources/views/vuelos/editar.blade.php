<!DOCTYPE html>
<html>
<head>
    <title>Editar Vuelo</title>
</head>
<body>
    <h1>Editar Vuelo</h1>
    <form action="{{ route('fly.update', ['codefly' => $fly->codefly]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
        <h1>Destino</h1>
        <select id="destination_id" name="id">
            @foreach($destinations as $destination)
                <option value="{{ $destination->id }}" {{ $fly->destination_id == $destination->id ? 'selected' : '' }}>{{ $destination->name }}</option>
            @endforeach
        </select>
        </div>
        <div>
        <h1>Aerolinea</h1>
        <select id="airline_id" name="id">
            @foreach($airlines as $airline)
                <option value="{{ $airline->id }}" {{ $fly->airline_id == $airline->id ? 'selected' : '' }}>{{ $airline->name }}</option>
            @endforeach
        </select>
        </div>
        <div>
            <h1>Sala de Abordaje</h1>
            <input type="text" id="salaabordaje" name="" value="{{ $fly->salaabordaje }}">
        </div>
        <div>
            <h1>Hora de Salida</h1>
            <input type="time" id="horasalida" name="horasalida" value="{{ $fly->horasalida }}">
        </div>
        <div>
            <h1>Hora Llegada</h1>
            <input type="time" id="horallegada" name="horallegada" value="{{ $fly->horallegada }}">
        </div>
        <button type="submit">Actualizar Vuelo</button>
    </form>
</body>
</html>
