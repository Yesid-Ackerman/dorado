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
            <h2>Destino</h2>
            <select id="destination_id" name="destination_id">
                @foreach($destinations as $destination)
                    <option value="{{ $destination->id }}" {{ $fly->destination_id == $destination->id ? 'selected' : '' }}>{{ $destination->desc }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <h2>Aerolínea</h2>
            <select id="airline_id" name="airline_id">
                @foreach($airlines as $airline)
                    <option value="{{ $airline->id }}" {{ $fly->airline_id == $airline->id ? 'selected' : '' }}>{{ $airline->desc }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <h2>Sala de Abordaje</h2>
            <input type="text" id="salaabordaje" name="salaabordaje" value="{{ $fly->salaabordaje }}">
        </div>

        <div>
            <h2>Hora de Salida</h2>
            <input type="time" id="horasalida" name="horasalida" value="{{ $fly->horasalida }}">
        </div>

        <div>
            <h2>Hora de Llegada</h2>
            <input type="time" id="horallegada" name="horallegada" value="{{ $fly->horallegada }}">
        </div>

        <br>
        <button type="submit">Actualizar Vuelo</button>
    </form>
</body>
</html>
