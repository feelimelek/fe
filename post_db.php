		<div class="img-container-home">
			<div class="inner-container" id="homeic">
				<span> Novo post? </span>
				<h2> Vai lá! Preencha o seguinte formulário. </h2>
			</div>
		</div>
	</div>
<?php

require_once('../entry.php');
//adicionamoas as infos do arquivo entry
	//if we are publishing
	if(isset($_POST['publishing'])){
		//instanciamos a classe entry
		$entry = new Entry();
		
		$entry-> createNewFromPOST($_POST);

		$entry-> SqlInsertEntry();
?>
	<a href="blog.php?post_id=<?php echo $entry->getId();?>">View </a>
<?php
}
?>

<div id = "create_form">
	<form action="app/create_post.php"method="POST">
		<div class="form-group">
			<label for="">Título</label>
			<textarea type="text" name="title" class="form-control" cols="20" rows="10" id="post_title" placeholder="Escreva o título"></textarea>
			<label for="">Autor</label>
			<input  type="text" name="author" id="post_author" class="form-control" placeholder="Escreva o seu nome"></input>
			<label for="">Resumo</label>
			<textarea type="text" name="excerpt" class="form-control" cols="30" rows="10" id="post_excerpt" placeholder="Escreva o resumo"></textarea>
			<label for="">Conteúdo</label>
			<textarea type="content" name="content" class="form-control" cols="30" rows="100" id="post_content" placeholder="Escreva o conteúdo"></textarea>
			<input type="hidden" name="post">
			<input type="submit" name="enviar" value="Publicar" class="btn btn-danger"></input>
		</div>
	</form>
</div>
							
							