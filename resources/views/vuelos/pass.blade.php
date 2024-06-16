<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Pasajeros</title>
</head>
<body>
    <div class="container">
        <h1>Pasajeros del Vuelo {{ $flie->salaabordaje }} - {{ $flie->destination->desc}}</h1>
        <table class="courses-table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>identificacion</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Cancelar Vuelo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flie->passengers as $passenger)
                    <tr>
                        <td>{{ $passenger->id }}</td>
                        <td>{{ $passenger->dni }}</td>
                        <td>{{ $passenger->names }}</td>
                        <td>{{ $passenger->lnames }}</td>
                        <td>{{ $passenger->email }}</td>
                        <td>{{ $passenger->phone }}</td>
                        <td>
                               <form action="{{ route('passenger.destroy',$passenger->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-button delete-button" value="Eliminar">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
