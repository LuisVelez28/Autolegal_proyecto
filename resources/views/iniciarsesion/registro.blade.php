@extends('iniciarsesion.pregistro')
@section('sesion')
<!--SESION-->
	<main class="container">
		<form class="row g-3 needs-validation" novalidate>
			<div class="col-md-4">
				<label for="validationCustom01" class="form-label">Nombre</label>
				<input type="text" class="form-control" id="validationCustom01" value="" required>
				<div class="valid-feedback">
					Se ve bien!
				</div>
			</div>
			<div class="col-md-4">
				<label for="validationCustom02" class="form-label">Apellido</label>
				<input type="text" class="form-control" id="validationCustom02" required>
				<div class="valid-feedback">
					Se ve bien!
				</div>
			</div>
			<div class="col-md-4">
				<label for="exampleInputEmail1" class="form-label">Correo</label>
				<div class="input-group has-validation">
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
						required>
					<div class="invalid-feedback">
						Proporcione un correo válido.
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<label for="validationCustom04" class="form-label">Departamento</label>
				<select class="form-select" id="Departamento" required>
					<option value="">Escoge...</option>
				</select>
			</div>
			<div class="col-md-3">
				<label for="validationCustom05" class="form-label">Municipio</label>
				<select class="form-select" id="Municipio" required>
					<option value="">Escoge...</option>
				</select>
			</div>
			<div class="col-md-3">
				<label for="password-field" class="form-label">Contraseña</label>
				<input type="password" class="form-control" id="password-field">
				<div class="valid-checks">
					<ul class="checklist">
						<li>Letra en minuscula</li>
						<li>Letra en mayuscula</li>
						<li>Numero</li>
						<li>Por lo menos 8 caracteres</li>
					</ul>
					
				</div>
			</div>
			<div class="col-12">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label" for="invalidCheck">
						Acepto terminos y condiciones
					</label>
					<div class="invalid-feedback">
						Debes aceptar los terminos y condiciones para continuar
					</div>
				</div>
			</div>
			<a onclick="abrirVentanaEmergente()" href="#">Leer terminos y condiciones</a>
			<div class="col-12">
				<button class="btn btn-primary" type="submit">Enviar</button>
			</div>
		</form>
	</main>
<!--Fin sesion-->
@endsection