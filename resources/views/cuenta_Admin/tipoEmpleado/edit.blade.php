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
                <form class="form-control" id="formulario" method="post" action="{{ route('tipoEmpleado.update',$tipo_empleado) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$tipo_empleado->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Cedula</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$tipo_empleado->descripcion}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
</body>

</html>
