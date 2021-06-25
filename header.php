<!DOCTYPE html>
<html>
	<head>
		<title> Título </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="app/css/bootstrap.min.css">
		<link rel="stylesheet" href="app/css/style.css">
		<link rel="shortcut icon" href="app/img/logo.png" size="32x32" type="image/png"
		>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
						<a href="#" class="navbar-brand"><img id="logo" src="app/img/logo.png" width="70" heigth="50" alt=""></a>
						<button style="margin-top:25px" class="navbar-toggler" data-toggle="collapse" data-target="#menu_lista"aria-expanded="false" aria-controls="menu_lista" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="menu_lista">
							
						    <ul class="navbar-nav  ml-md-auto">
						      <li class="nav-item active">
						        <a class="nav-link" href="?i=home">Home <span class="sr-only">(current)</span></a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="?i=sobre">Sobre</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="?i=serviços">Serviços</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="?i=contato">Contato</a>
						      </li>
						      <form class="form-inline">
								<div class="input-group">
									<input type="text" placeholder="Buscar" name="buscar" class="form-control">
									<input type="submit" class="btn btn-outline-info input-group-append">
								</div>
								</form>
						    </ul>
						</div>
					</div>
				</nav>
			</header>