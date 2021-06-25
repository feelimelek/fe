		<div class="img-container-blog">
			<div class="inner-container">
				<span> Categoria </span>
			</div>
		</div>
	</div>

<?php

	include 'C:/xampp/htdocs/fe/app/include/public_functions.php';
	require_once 'C:/xampp/htdocs/fe/app/include/db.php';
	if(ISSET($_GET['topic'])){
		$topic_id = $_GET['topic'];
		$posts = getPostsPublicadosComTopico($topic_id);}?>
		<div class="container">
			<header class="blog-header py-3">
				<div class="row flex-nowrap justify-content-between align-items-center">
					<div class="col-12 text-center">
					<span class="blog-header-logo text-dark"><?php echo getNomeTopicoComId($topic_id)?> </span>
				</div>	
			</div>	
		</header>
	</div>
	<?php
	foreach($posts as $post):?>
		<div class="row mb-2">
			<div class="col-md-6">
				<div class="card flex-md-row mb-4 box-shadow h-md-250 adapt">
					<div class="card-body d-flex flex-column align-items-start">
						<h3 class="mb-0"><?phpecho $post['post_title']?></h3>
						<div class="mb-1 text-muted"><?php echo date("d-m-Y", strtotime($post['created_at']));?> </div>
						<p class="card-text mb-auto over"><?php echo $post['post_excerpt']?></p>
						<a href="single_post.php?post-slug=<?php echo $post['slug'];?>">Continue a ler</a>
					</div>
					<img class="card-img-right flex-auto d-none d-md-block pr-lg-0 pr-2 img-blog-size" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]"src="<?php echo $post['image']; ?>"data-holder-rendered="true;">
				</div>
			</div>
		</div>
	<?php endforeach ?>