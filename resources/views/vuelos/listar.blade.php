<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Panel de Aministracion</h1>
    </div>
    <div class="container">
    <h1>Gestión de Vuelos</h1>
        <table class="courses-table">
            <thead>
                <tr>
                    <th>Vuelo</th>
                    <th>Destino</th>
                    <th>Aerolínea</th>
                    <th>Sala de Abordaje</th>
                    <th>Hora de Partida</th>
                    <th>Hora de Llegada</th>
                    <th>Editar</th>
                    <th>Pasajeros</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flies as $fly)
                    <tr>
                        <td>{{ $fly->codefly }}</td>
                        <td>{{ $fly->destination->desc }}</td>
                        <td>{{ $fly->airline->desc }}</td>
                        <td>{{ $fly->salaabordaje }}</td>
                        <td>{{ $fly->horasalida }}</td>
                        <td>{{ $fly->horallegada }}</td>
                        <td>
                            <a href="{{ route('fly.edit', ['codefly' => $fly->codefly]) }}" class="action-button" title="Editar">
                                <input type="button" value="Editar">
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('fly.pass', ['codefly' => $fly->codefly]) }}" class="action-button" title="Pasajeros">
                                <input type="button" value="Pasajeros">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>