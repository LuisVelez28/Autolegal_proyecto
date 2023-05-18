<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            background-image: linear-gradient(56deg, rgba(254, 254, 254, 0.05) 0%, rgba(254, 254, 254, 0.05) 69%, rgba(160, 160, 160, 0.05) 69%, rgba(160, 160, 160, 0.05) 100%), linear-gradient(194deg, rgba(102, 102, 102, 0.02) 0%, rgba(102, 102, 102, 0.02) 60%, rgba(67, 67, 67, 0.02) 60%, rgba(67, 67, 67, 0.02) 100%), linear-gradient(76deg, rgba(169, 169, 169, 0.06) 0%, rgba(169, 169, 169, 0.06) 89%, rgba(189, 189, 189, 0.06) 89%, rgba(189, 189, 189, 0.06) 100%), linear-gradient(326deg, rgba(213, 213, 213, 0.04) 0%, rgba(213, 213, 213, 0.04) 45%, rgba(66, 66, 66, 0.04) 45%, rgba(66, 66, 66, 0.04) 100%), linear-gradient(183deg, rgba(223, 223, 223, 0.01) 0%, rgba(223, 223, 223, 0.01) 82%, rgba(28, 28, 28, 0.01) 82%, rgba(28, 28, 28, 0.01) 100%), linear-gradient(3deg, rgba(20, 20, 20, 0.06) 0%, rgba(20, 20, 20, 0.06) 62%, rgba(136, 136, 136, 0.06) 62%, rgba(136, 136, 136, 0.06) 100%), linear-gradient(200deg, rgba(206, 206, 206, 0.09) 0%, rgba(206, 206, 206, 0.09) 58%, rgba(6, 6, 6, 0.09) 58%, rgba(6, 6, 6, 0.09) 100%), linear-gradient(304deg, rgba(162, 162, 162, 0.07) 0%, rgba(162, 162, 162, 0.07) 27%, rgba(24, 24, 24, 0.07) 27%, rgba(24, 24, 24, 0.07) 100%), linear-gradient(186deg, rgba(166, 166, 166, 0.04) 0%, rgba(166, 166, 166, 0.04) 5%, rgba(210, 210, 210, 0.04) 5%, rgba(210, 210, 210, 0.04) 100%), linear-gradient(90deg, rgb(26, 118, 64), rgb(32, 207, 121), rgb(78, 196, 128));
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('clientes.update',$cliente) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$cliente->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Cedula</label>
                        <input type="number" class="form-control" id="cedula" name="cedula" value="{{$cliente->cedula}}">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" value="{{$cliente->telefono}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
</body>

</html>
