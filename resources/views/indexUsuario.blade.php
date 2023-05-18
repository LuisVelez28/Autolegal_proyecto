@extends('templates.main')
@section('title', 'Autolegal S.A.S.')
@section('content')
    <br>
    <h1 style="text-align: center">Bienvenido Usuario</h1>
    <p style="text-align: center">Aqui encontraras todas las rutas disponibles hasta le momento</p>
    <br>
    <div id="contenedor">
        <div class="container text-center">
            <form action="{{ route('viajes2') }}" method="get">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="costo" class="form-label">Costo</label>
                        <input type="float" class="form-control" name="costo">
                    </div>
                    <div class="col-md-6">
                        <label for="">Fecha Salida:</label>
                        <br>
                        <input type="datetime-local" class="form-control" name="Consulta">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Buscar</button>
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
            </tr>
        </thead>
    </table>
@endsection
