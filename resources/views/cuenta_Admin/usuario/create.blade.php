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
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Pagina Usuario</title>
    </head>

    <body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">AUTOLEGAL</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="#">Cerrar Sesión</a>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
                    <div class="position-sticky pt-3 sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="CuentaUsuario">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="clientes">
                                    <span data-feather="file" class="align-text-bottom"></span>
                                    Clientes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="empleados">
                                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                    Empleados
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="bus">
                                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                    Buses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="paradas">
                                    <span data-feather="users" class="align-text-bottom"></span>
                                    Paradas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="rolUsuario">
                                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                    Rol Usuario
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="rutasyhorarios">
                                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                    Rutas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tipoEmpleado">
                                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                    Tipo Empleados
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tipoRuta">
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Tipos Rutas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tipoVehiculo">
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Tipos Vehiculos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="viajes">
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Viajes
                                </a>
                            </li>
                        </ul>

                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                            <span>Generar Reporte</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle" class="align-text-bottom"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text" class="align-text-bottom"></span>
                                    Empleados
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text" class="align-text-bottom"></span>
                                    Buses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text" class="align-text-bottom"></span>
                                    Rutas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text" class="align-text-bottom"></span>
                                    Viajes
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Usuarios</h1>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <form class="form-control" id="formulario" method="post"
                                    action="{{ route('clientes.store') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cedula" class="form-label">Cedula</label>
                                        <input type="number" class="form-control" id="cedula" name="cedula">
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Telefono</label>
                                        <input type="cedula" class="form-control" id="telefono" name="telefono">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Crear</button>
                                </form>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td>{{ $cliente->nombre }}</td>
                                        <td>{{ $cliente->cedula }}</td>
                                        <td>{{ $cliente->telefono }}</td>
                                        <td>
                                            <a href="{{ route('clientes.edit', $cliente) }}"
                                                class="btn btn-warning">Editar</a>
                                            <form action="{{ route('clientes.destroy', $cliente) }}" method="post"
                                                class="d-inline">
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
