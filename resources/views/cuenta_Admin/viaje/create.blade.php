<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa de Transporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-success fixed-top">
            <div class="container-fluid">
                <a href="/"><img src="../imagenes/img/Logo.jpg" style="width: 150px; height: 50px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <h1 class="text-center">Creacion de viajes</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('viajes.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="id_ruta" class="form-label">Ruta</label>
                        <select class="form-select" id="id_ruta" name="id_ruta">
                            @foreach ($rutas as $ruta)
                                <option value="{{ $ruta->id }}">{{ $ruta->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_conductor" class="form-label">conductor</label>
                        <select class="form-select" id="id_conductor" name="id_conductor">
                            @foreach ($conductores as $conductor)
                                <option value="{{ $conductor->id }}">{{ $conductor->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_vehiculo" class="form-label">Vehiculo</label>
                        <select class="form-select" id="id_vehiculo" name="id_vehiculo">
                            @foreach ($vehiculos as $vehiculo)
                                <option value="{{ $vehiculo->id }}">{{ $vehiculo->placa }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_salida" class="form-label">Fecha salida</label>
                        <input type="datetime-local" class="form-control" id="fecha_salida" name="fecha_salida">
                    </div>

                    <div class="mb-3">
                        <label for="fecha_llegada" class="form-label">Fecha llegada</label>
                        <input type="datetime-local" class="form-control" id="fecha_llegada" name="fecha_llegada">
                    </div>

                    <div class="mb-3">
                        <label for="costo" class="form-label">Costo</label>
                        <input type="float" class="form-control" id="costo" name="costo">
                    </div>

                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Ruta</th>
                    <th scope="col">conductor</th>
                    <th scope="col">Vehiculo</th>
                    <th scope="col">Fecha salida</th>
                    <th scope="col">Fecha llegada</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Cupos Disponibles</th>
                    <th scope="row">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viajes as $viaje)
                    @php
                        $ruta = collect($rutas)
                            ->where('id', $viaje->id_ruta)
                            ->first()->nombre;
                        $conductor = collect($conductores)
                            ->where('id', $viaje->id_conductor)
                            ->first()->nombre;
                        $vehiculo = collect($vehiculos)
                            ->where('id', $viaje->id_vehiculo)
                            ->first()->placa;
                        
                    @endphp

                    <tr>
                        <td>{{ $ruta }}</td>
                        <td>{{ $conductor }}</td>
                        <td>{{ $vehiculo }}</td>
                        <td>{{ $viaje->fecha_salida }}</td>
                        <td>{{ $viaje->fecha_llegada }}</td>
                        <td>{{ $viaje->costo }}</td>
                        <td>{{ $viaje->cupos_disponibles }}</td>
                        <td>
                            <a href="{{ route('viajes.edit', $viaje) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('viajes.destroy', $viaje) }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>

</html>
