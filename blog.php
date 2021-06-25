		<div class="img-container-blog">
			<div class="inner-container">
				<span> BLOG </span>
				<h2> Bem vinda aos meus pensamentos </h2>
			</div>
		</div>
	</div>
	<?php include 'C:/xampp/htdocs/fe/app/include/index_post.php';?>
	<div class="container">
		<header class="blog-header py-3">
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 pt-1">
					<a class="text-muted" href="#">Subscribe</a>
				</div>
				<div class="col-4 text-center">
					<a class="blog-header-logo text-dark" href="#">	Blog </a>
				</div>
				<div class="col-4 d-flex align-items-center justify-content-end">
					<a class="text-muted" href="#">
						<span class="oi oi-magnifying-glass"></span>
					</a>
					<a  class="text-muted"href="?i=login">
						<span class="oi oi-account-login"></span> 
					</a>
				</div>	
			</div>	
		</header>
		<div class="nav-scroller py-1 mb-2">
			<nav class="nav d-flex justify-content-between">
				<a class="p-2 text-muted" href="#">Mundo</a>
				<a class="p-2 text-muted" href="#">Viagens</a>
				<a class="p-2 text-muted" href="#">Reflexões</a>
				<a class="p-2 text-muted" href="#">Cultura</a>
				<a class="p-2 text-muted" href="#">Sociedade</a>
			</nav>
		</div>
		<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
			<div class="col-6 px-0">
				<h1 class="display-4 font-italic font">Post principal</h1>
				<p class="lead my-3">Esse é o post principal. Nele você vai encontrar informações sobre o assunto mais relevante do momento ou o último post que saiu.</p>
				<p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Leia mais...</a></p>		
			</div>
		</div>
		<?php foreach($posts as $post):?>
		<div class="row mb-2">
			<div class="col-md-6">
				<div class="card flex-md-row mb-4 box-shadow h-md-250 adapt">
					<div class="card-body d-flex flex-column align-items-start">
						<?php if(isset($post['topic']['name'])): ?>
						<a href="<?php echo '?i=filtered_posts&topic=' . $post['topic']['id']; ?>" a ><strong class="d-inline-block mb-2 text-primary"><?php echo $post['topic']['name']?>
						</strong></a>
						<?php endif ?>
						<h3 class="mb-0"><?phpecho $post['post_title']?></h3>
						<div class="mb-1 text-muted"><?php echo date("d-m-Y", strtotime($post['created_at']));?> </div>
						<p class="card-text mb-auto over"><?php echo $post['post_excerpt']?></p>
						<a href="?i=single_post&post-slug=<?php echo $post['slug'];?>">Continue a ler</a>
					</div>
					<img class="card-img-right flex-auto d-none d-md-block pr-lg-0 pr-2 img-blog-size" data-src="holder.js/200x250?theme=thumb" data-holder-rendered="true" alt="Thumbnail [200x250]"src="<?php echo $post['image']; ?>">
				</div>
			</div>
		</div>
	<?php endforeach ?>
			<div class="col-md-6">
				<div class="card flex-md-row mb-4 box-shadow h-md-250 adapt">
					<div class="card-body d-flex flex-column align-items-start">
						<strong class="d-inline-block mb-2 text-primary">Mundo</strong>
						<h3 class="mb-0"><a href="#" class="text-dark">Tikun Olam</a></h3>
						<div class="mb-1 text-muted">16 de Mar</div>
						<p class="card-text mb-auto over">Hoje, aconteceu algo espetacular. Uma flor floresceu. E não é qualquer flor.</p>
						<a href="#">Continue a ler</a>
					</div>
					<img class="card-img-right flex-auto d-none d-md-block pr-lg-0 pr-2 img-blog-size" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]"src="app/img/flor3.JPG" data-holder-rendered="true;">
				</div>
			</div>
			
		</div>
	</div>

	<main role="main" class="container">
		<div class="row"> 
			<div class="col-md-8 blog-main">
				<h3 class="pb-3 mb-4 font-italic border-bottom">Notícias em alta</h3>
				<div class="mb-2">
					<h2 class="blog-main-title text-dark">O Reino do Vermelho.</h2>
					<p class="blog-main-data">
						18 de Março de 2021 por
						<a href="?=sobre">Fernanda</a>.
					</p>
					<p class="text-justify">Não é estranho que o vermelho seja uma cor tão prestigiada em nossa sociedade?
					Quantas pessoas você conhece que tem a fruta favorita vermelha? Morango, melancia,
					lixia (a casca), framboesa, cramberry, uvas (meio vermelhas, meio roxas) etc. Quantas
					pessoas com as quais você dividiu um tubinho de mentos preferiam a bolinha vermelha? Ou até pessoas que curtem muito uma carne vermelha.
					Não sei se é só no meu meio social, mas eu conheço muita gente que gosta de comidas 
					vermelhas. E isso me intriga. 
					</p>
					<hr>
					<p class="text-justify">Os fast foods e empresas famosas como a Coca Cola usam vermelho em sua marca também. 
					Isso de alguma forma as torna atrativas para as pessoas. O vermelho estimula a fome,
					o metabolismo, expressa vidalidade e energia.
					</p>
					<p class="text-justify">As bocas das pessoas têm, em modo geral, uma certa pigmentação avermelhada e o beijo
					é algo muito estimado na sociedade em que vivo. 
					</p>
					<p class="text-justify">Não é à toa que o símbolo universal do amor é um coração vermelho. 
					</p>
					<p class="text-justify"> O que dá o vermelho do coração é nada mais nada menos que nosso sangue.
					Uma pequena gota de sangue, menor do que uma pinta sua, possui uma infinidade de informações
					sobre você, que muito provavelmente você não saberá por completo em toda a sua vida (o DNA).
					É formidável que algo tão pequeno possa ter uma dimensão de significado tão grande.</p>
					<p class="text-justify">
					O sangue pode ter vários significados. É a circulação dele que nos dá vida. Sem nosso sangue,
					não temos glóbulos brancos e anticorpos para nos defender de patógenos, não temos circulação
					de oxigênios promovidas pelos glóbulos vermelhos e nosso coração não bate. Então, o sangue pode simbolizar vida - obrigada ao anime Cells
					at Work por me ensinar biologia de um jeito tão divertido. Sim, professor, eu lembro de uma aula 
					ou outra sua, só que sabe como é né, o sistema educacional formal não é exatamente a forma mais eficiente
					de aprender.
					</p>
					<p>
					Além disso, há várias histórias popularmente conhecidas e admiradas que representam o vermelho, como High School Musical,  Chapeuzinho Vermelho, Carros, Homem-Aranha e até o Exodus 
					quando os hebreus atravessam o Mar Vermelho.
					Até em performances, o vermelho recebe grandes destaques, musicais como Annie, o nariz do palhaço e até o blush que se passa nas bochechas para dar um <em>up</em> no visual.
					</p>
					<h2>Outros significados do vermelho.</h2>
					<p class="text-justify">
					Porém, se vemos alguém sangrando, na maioria dos casos, nos dá uma sensação de perigo (a não ser que 
					a pessoa tenha acabado de sair da mãe, sabemos que os bebês nascem sujinhos de sangue). Entendemos que
					algo está errado. Muitas séries da Marvel, por exemplo, retratam cenas de lutas cheias de sangue
					e, nesse caso, o sangue não simboliza vida, mas dor, morte.
					</p>
					<p class="text-justify">Trazendo de volta os fast foods, é interessante refletirmos como ao nos direcionar a uma lanchonete
					de fast food, sentimos que estamos vivendo, apesar, de no fundo, sabermos que aquele não é exatamente
					a melhor fonte de nutrientes para o nosso corpo.
					</p>
					<p class="text-justify">Outra abordagem que podemos ter quanto ao vermelho é que muitas bandeiras foram levantadas com essa cor. 
					Comunismo, nazismo, anarquismo, antifascismo são alguns dos movimentos que possuem bandeiras com uma parte 
					vermelha bem marcante etc.
					Ou, ainda pensando
					em sistemas e movimentos políticos, há alguns que tomaram ou tomam decisões a níveis governamentais usando o sangue como fator essencial. É o caso de monarquias que escolhem seus reis ou rainhas por descendência. Ou então o nazismo, que discriminava judeus e outros grupos por seu "sangue ruim", como diria Draco Malfoy ao se referir à Hermione por não ser bruxa nascida de pais bruxos. </p>
					<h3>Bochechas vermelhas</h3>
					<p class="text-justify"> 
					Enfim, essa foi uma percepção minha que tive a oportunidade de refletir sobre nos últimos dias e que não tem nenhum
					objetivo prático. 
					Quem me conhece sabe que quando eu me pego, sem querer, chamando a atenção de muitas pessoas a minha volta, minhas bochechas automatica e involuntariamente ficam vermelhas. Então espero que esse texto me pegue de surpresa e me deixe com as bochechas vermelhas em algum momento, pois isso significará que eu consegui impactar alguém.
					Engraçado que comecei a escrever e nem me dei conta de que estou vestindo uma camiseta vermelha até agora.
					Para me despedir, deixo um questionamento: O que de vermelho é marcante na sua vida?
					</p>
					<blockquote><cite>[Red, red, red, redder than red] - Bob Marley</cite></blockquote>
					<p class="text-justify"> 
					E não, eu não fumei maconha. </p>
				</div>
				<nav class="mb-2">
					<a class="btn btn-outline-danger" href="#">Mais recentes</a>
					<a class="btn btn-outline-primary" href="#">Mais antigas</a>
				</nav>
			</div>
			<aside class="col-md-4 blog-sidebar">
				<div class="p-3 mb-3 bg-light rounded mt-5">
					<h4>Sobre</h4>
					<p>Suponha que pretendo escrever um livro sobre mim. Cada capítulo é algo ou alguém que teve alguma influência sobre quem eu sou e na minha maneira de pensar.
					Capítulo # 1- <em>Os Elimelek's</em>
					Capítulo # 2- <em>“O lugar onde as amizades se tornam realidade”</em>
					Capítulo # 3- <em>Avanhandava</em>
					Capítulo # 4- <em>Projetos: GetBy e pesquisa científica</em>	
					Capítulo # 5- <em>Viagens: QUANTA e YYGS</em>
					Capítulo # 6- <em>Universidade</em>
					</p>
				</div>
				<div class="p-3">
					<h4>Arquivo</h4>
					<ol class="list-unstyled">
						<li><a href="#">Março 2021</a></li>
						<li><a href="#">Fevereiro 2021</a></li>
						<li><a href="#">Janeiro 2021</a></li>
						<li><a href="#">Dezembro 2020</a></li>
						<li><a href="#">Novemrbro 2020</a></li>
						<li><a href="#">Outubro 2020</a></li>
						<li><a href="#">Setembro 2020</a></li>		
					</ol>
				</div>
				<div class="p-3">
					<h4>Contato</h4>
					<ol class="list-unstyled">
						<li><a href="https://www.facebook.com/fernanda.elimelek.7">Facebook</a></li>
						<li><a href="https://www.instagram.com/fe_elimelek/">Instagram</a></li>
						<li><a href="#">Linkedin</a></li>
					</ol>
				</div>
			</aside>
		</div>
	</main>