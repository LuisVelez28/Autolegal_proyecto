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
                <img src="../imagenes/img/Logo.jpg" style="width: 150px; height: 50px;" alt="Logo">
                    </div>
        </nav>
    </header>

    <h1 class="text-center">Ingreso de Buses</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Placa</label>
                        <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="categoria">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="precio">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Capacidad</label>
                        <input type="number" class="form-control" id="precio">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="precio">
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="crearJuego()">Crear</button>
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
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehiculos as $vehiculo)
                    <tr>
                        <td>{{ $vehiculo->placa }}</td>
                        <td>{{ $vehiculo->modelo }}</td>
                        <td>{{ $vehiculo->marca }}</td>
                        <td>{{ $vehiculo->capacidad }}</td>
                        <td>{{ $vehiculo->estado }}</td>
                        <td>
                            <a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>

</html>
