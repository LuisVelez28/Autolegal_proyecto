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
                <form class="form-control" id="formulario" method="post" action="{{ route('empleados.update',$empleado) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$empleado->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Cedula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" value="{{$empleado->cedula}}">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{$empleado->telefono}}">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-control" name="id_tipo_empleado" id="tipo_empleado">
                            @foreach ($tipos_empleado as $tipo_empleado)
                                @if ($tipo_empleado->id == $tipo)
                                    <option value="{{ $tipo_empleado->id }}" selected>{{ $tipo_empleado->nombre }}</option>
                                @else
                                    <option value="{{ $tipo_empleado->id }}">{{ $tipo_empleado->nombre }}</option>
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
