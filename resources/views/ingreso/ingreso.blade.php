@extends('ingreso.planin')

@section('Titulo1')
    {{'Autolegal S.A.S'}}
@endsection

@section('registro')
<!---Registro-->
<body>
		<main class="container">
			<form>
				<div class="container text-center">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Correo</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con nadie más.
						</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Contraseña</label>
						<input type="password" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Recuerdame</label>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</div>
			</form>
		</main>
<!--Fin Registro-->
@endsection
		<script src='{{asset('js/functions/Scrip.js')}}'></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
			crossorigin="anonymous"></script>
	</body>

	</html>
