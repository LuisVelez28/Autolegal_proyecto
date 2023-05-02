<!--Cabecera-->
<!DOCTYPE html>
<html>

<head id="head">
	<title>@yield('Titulo1')</title>
	<meta charset="UTF-8">
</head>

<body>
	<header id="header">
		<!-- 
			loaded from js
		-->
	</header>
<!--Fin cabecera-->
@yield('index')

<!--Pie de pagina-->
<footer id="footer">
    <!-- 
        loaded from js
    -->
</footer>

<script src='{{asset('js/functions/Script.js')}}'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
</body>

</html>
<!--Fin pie de pagina-->