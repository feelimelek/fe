<!DOCTYPE html>
<html>
	<head>
		<title> Título </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="app/css/style.css">
		<link rel="stylesheet" href="app/css/bootstrap.min.css">
		<link href="app/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	
		<link rel="shortcut icon" href="app/img/logo1.png" size="32x32" type="image/png"
		>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container-fluid p-0">
			<header id="header-site">
				<nav class="navbar navbar-expand-lg navbar-dark" >
					<div class="container">
						<a href="#" class="navbar-brand"><img id="logo" src="app/img/site_fe.png" width="180"alt=""></a>
						<button class="navbar-toggler mt-4" data-toggle="collapse" data-target="#menu_lista"aria-expanded="false" aria-controls="menu_lista" aria-label="Toggle navigation">
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
						        	<a class="nav-link" href="?i=serviços" id="serv">Serviços</a>
						      	</li>
						      	<li class="nav-item dropdown" >
						      		<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
						    		<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          							<a class="dropdown-item" href="?i=fotos">Fotos</a>
	          							<a class="dropdown-item" href="?i=tech">Tech</a>
	         							<a class="dropdown-item" href="?i=hobbies">Hobbies</a>
	         							<a class="dropdown-item" href="?i=blog">Aprender</a>
	        						</div>
	     				      	</li>
						      	<li class="nav-item">
							       	<a class="nav-link" href="?i=blog">Blog</a>
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