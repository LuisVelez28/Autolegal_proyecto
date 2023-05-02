@extends('contactanos.pcontactanos')
@section('contacto')
    

<!--contactanos-->
    <main class="container">
        <!-- Crear un formulario de contacto -->
        <h1>Contáctanos</h1>
        <p>Envíanos tus comentarios y sugerencias</p>
        <form action="contactanos.html" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Escribe tu email">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form> 
    </main>
<!--Fin contactanos-->
@endsection