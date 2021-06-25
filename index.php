<?php
/*
Site: site
Autor: Fernanda Elimelek
Data: 14 de Fevereiro de 2021
*/
/*Banco de Dados*/
include 'app/include/db.php';

/*Define a página atual pela URL */
$pagina = 'home';
/*Existe uma variável chamada i na variável? Se sim, armazena seu valor na variável página */
if(isset($_GET['i'])){
	$pagina=addslashes($_GET['i']);
}
/* Carregar o header.php (essa parte da minha página é estática)*/
include 'app/views/header.php';

/* Carregar a página escolhida pelo usuário (caso a variável página for igual a home...)*/
switch($pagina){
	case 'home':
		include 'app/views/home.php';
		break;
	case 'sobre';
		include 'app/views/sobre.php';
		break;
	case 'serviços';
		include 'app/views/serviços.php';	
		break;
	case 'hobbies';
		include 'app/views/hobbies.php';	
		break;	
	case 'tech';
		include 'app/views/tech.php';	
		break;	
	case 'fotos';
		include 'app/views/fotos.php';	
		break;	
	case 'blog';
		include 'app/views/blog.php';
		break;
	case 'contato';
		include 'app/views/contato.php';
		break;
	case 'create_post';
		include 'app/create_post.php';
		break;
	case 'filtered_posts';
		include 'app/views/filtered_posts.php';
		break;
	case 'single_post';
		include 'app/views/single_post.php';
		break;
	case 'login';
		include 'app/views/login.php';
		break;
	case 'logout';
		include 'app/views/logout.php';
		break;
	
	default: 
		include 'app/views/home.php';
		break;

}

/* Carrega o footer.php*/
include  'app/views/footer.php';