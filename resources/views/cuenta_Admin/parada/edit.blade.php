<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('paradas.update',$parada) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$parada->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="posicion" class="form-label">Posicion</label>
                        <input type="text" class="form-control" id="posicion" name="posicion" value="{{$parada->posicion}}">
                    </div>

                    <div class="mb-3">
                        <label for="id_ruta" class="form-label">Tipo</label>
                        <select class="form-control" name="id_ruta" id="id_ruta">
                            @foreach ($rutas as $ruta)
                                @if ($ruta->id == $id_ruta)
                                    <option value="{{ $ruta->id }}" selected>{{ $ruta->nombre }}</option>
                                @else
                                    <option value="{{ $ruta->id }}">{{ $ruta->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
</body>

</html>
