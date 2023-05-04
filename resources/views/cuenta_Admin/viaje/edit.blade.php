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
                <form class="form-control" id="formulario" method="post"
                    action="{{ route('viajes.update', $viaje) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="id_ruta" class="form-label">Ruta</label>
                        <select class="form-select" id="id_ruta" name="id_ruta">
                            @foreach ($rutas as $ruta)
                                @if ($ruta->id == $id_ruta)
                                    <option value="{{ $ruta->id }}" selected>{{ $ruta->nombre }}</option>
                                @else
                                    <option value="{{ $ruta->id }}">{{ $ruta->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_conductor" class="form-label">conductor</label>
                        <select class="form-select" id="id_conductor" name="id_conductor">
                            @foreach ($conductores as $conductor)
                                @if ($conductor->id == $id_conductor)
                                    <option value="{{ $conductor->id }}" selected>{{ $conductor->nombre }}</option>
                                @else
                                    <option value="{{ $conductor->id }}">{{ $conductor->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_vehiculo" class="form-label">Vehiculo</label>
                        <select class="form-select" id="id_vehiculo" name="id_vehiculo">
                            @foreach ($vehiculos as $vehiculo)
                                @if ($vehiculo->id == $id_vehiculo)
                                    <option value="{{ $vehiculo->id }}" selected>{{ $vehiculo->placa }}</option>
                                @else
                                    <option value="{{ $vehiculo->id }}">{{ $vehiculo->placa }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_salida" class="form-label">Fecha salida</label>
                        <input type="datetime-local" class="form-control" id="fecha_salida" name="fecha_salida"
                            value="{{ $viaje->fecha_salida }}">
                    </div>

                    <div class="mb-3">
                        <label for="fecha_llegada" class="form-label">Fecha llegada</label>
                        <input type="datetime-local" class="form-control" id="fecha_llegada" name="fecha_llegada"
                            value="{{ $viaje->fecha_llegada }}">
                    </div>

                    <div class="mb-3">
                        <label for="costo" class="form-label">Costo</label>
                        <input type="float" class="form-control" id="costo" name="costo"
                            value="{{ $viaje->costo }}">
                    </div>

                    <div class="mb-3">
                        <label for="cupos_disponibles" class="form-label">Cupos disponibles</label>
                        <input type="float" class="form-control" id="cupos_disponibles" name="cupos_disponibles"
                            value="{{ $viaje->cupos_disponibles }}" disabled>
                    </div>

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
</body>

</html>
