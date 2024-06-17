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
            @foreach($destinations as $destination)
                @if($fly->destination_id == $destination->id)
                    <p>{{ $destination->desc }}</p>
                @endif
            @endforeach
        </div>
        <div>
            <h2>Aerolínea</h2>
            @foreach($airlines as $airline)
                @if($fly->airline_id == $airline->id)
                    <p>{{ $airline->desc }}</p>
                @endif
            @endforeach
        </div>
        <div>
            <h2>Sala de Abordaje</h2>
            <p>{{ $fly->salaabordaje }}</p>
        </div>
        <div>
            <h2>Hora de salida</h2>
            <input type="time" step="2" id="hora" name="horasalida" value="{{ $fly->horasalida }}">
        </div>
        <div>
            <h2>Hora de Llegada</h2>
            <input type="time" step="2" id="hora" name="horallegada" value="{{ $fly->horallegada }}">
        </div>

        <br>
        <button type="submit">Actualizar Vuelo</button>
    </form>
</body>
</html>
