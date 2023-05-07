@extends('templates.main')
{{-- @section('title', 'Rutas y Horarios') --}}
@section('title', 'Rutas Urbanas')
@section('content')
    <form>
        <label for="">Origen:</label>
        <br>
        <select class="form-select" aria-label="Default select example">
            <option selected disabled>seleccione...</option>
            <option value="1">Origen uno</option>
            <option value="2">Origen dos</option>
            <option value="3">Origen tres</option>
        </select>
        <br>
        <label for="">Destino:</label>
        <br>
        <select class="form-select" aria-label="Default select example">
            <option selected disabled>seleccione...</option>
            <option value="1">Destino uno</option>
            <option value="2">Destino dos</option>
            <option value="3">Destino tres</option>
        </select>
        <br>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
@endsection
