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

    <h1 class="text-center">Lista de pqrs</h1>
    <br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre Cliente</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mensaje</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pqrs as $pqr)

                    <tr>
                        <td>{{ $pqr->nombre_cliente }}</td>
                        <td>{{ $pqr->Email }}</td>
                        <td>{{ $pqr->Mensaje }}</td>
                        <td>
                            <!--
                            <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning">Editar</a>
-->
                            <form action="{{ route('contactanos.destroy', $pqr) }}" method="post" class="d-inline">
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
