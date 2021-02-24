<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">
	
	
</head>
<body>
	<div class="nav">
		@yield("nav")
		<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
		<div class="container">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="/">Inicio</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="{{route('platos.index')}}">Platos</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="/consultar_menu">Menu</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="{{route('cartas.index')}}">Cartas</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="/regiones">Regiones</a>
						</li>						
						<li class="nav-item">
						<a class="nav-link" href="/ventas">Ventas</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="/consultas">Consulta Platos</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="/consulta_regiones">Consulta Regiones</a>
						</li>	
						<li class="nav-item">
						<a class="nav-link" href="/consulta_categorias">Consulta Horarios</a>
						</li>													
					</ul>
				</div>
			</div>
		</div>
		</nav>
	</div>
	<div class="body">
		@yield("body")
	</div>
</body>
</html>