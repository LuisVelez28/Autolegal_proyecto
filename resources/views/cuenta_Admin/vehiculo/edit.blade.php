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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <h1 class="text-center">Ingreso de Buses</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('CuentaAdmin.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="placa" class="form-label">Placa</label>
                        <input type="text" class="form-control" id="placa" name="placa">
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo">
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca">
                    </div>
                    <div class="mb-3">
                        <label for="capacidad" class="form-label">Capacidad</label>
                        <input type="number" class="form-control" id="capacidad" name="capacidad">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-control" name="id_tipo_vehiculo" id="tipo_vehiculo">
                            @foreach ($tipos_vehiculo as $tipo_vehiculo)
                                <option value="{{ $tipo_vehiculo->id }}">{{ $tipo_vehiculo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Placa</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Capacidad</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehiculos as $vehiculo)

                    @php
                        $tipo = collect($tipos_vehiculo)->where('id', $vehiculo->id_tipo_vehiculo)->first()->nombre;
                    @endphp
                    <tr>
                        <td>{{ $vehiculo->placa }}</td>
                        <td>{{ $vehiculo->modelo }}</td>
                        <td>{{ $vehiculo->marca }}</td>
                        <td>{{ $vehiculo->capacidad }}</td>
                        <td>{{ $vehiculo->estado }}</td>
                        <td>{{ $tipo }}</td>
                        <td>
                            <a href="{{ route('CuentaAdmin.edit', $vehiculo) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('CuentaAdmin.destroy', $vehiculo) }}" method="post" class="d-inline">
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
