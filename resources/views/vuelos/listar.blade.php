<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1><i class="fa-solid fa-list"></i> REGISTRO VUELOS</h1>

        <table class="courses-table">
            <thead>
                <tr>
                    <th>Vuelo</th>
                    <th>Destino</th>
                    <th>Aerolinea</th>
                    <th>Sala Abordaje</th>
                    <th>H Partida</th>
                    <th>H Llegada</th>
                    <th>Mostrar</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flies as $flie)
                    <tr>
                        <td>{{$flie->destination->id}}</td>
                        <td>{{$flie->destination->desc}}</td>
                        <td>{{$flie->airline->desc}}</td>
                        <td>{{$flie->salaabordaje}}</td>
                        <td>{{$flie->horasalida}}</td>
                        <td>{{$flie->horallegada}}</td>
                        <td>
                            <a href="{{route('fly.show',$flie->codefly)}}" class="action-button" title="Mostrar">
                                {{-- <i class="fas fa-eye"></i> --}}
                                <input type="button" value="Mostrar">
                            </a>
                        </td>
                        <td>
                            {{-- <a href="{{route('curso.edit',$curso->id)}}" class="action-button" title="Editar"> --}}
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            {{-- <form action="{{route('curso.destroy',$curso->id)}}" method="POST" class="delete-form"> --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="action-button delete-button" title="Eliminar">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>