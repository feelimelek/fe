<?php

class Entry {
	private $id;
	private $date;
	private $author;
	private $title;
	private $excerpt;
	private $content;
	private $dbh;
	private $error;
	
	public function imprime($texto){
	echo '<br><div>Erro :'. $texto.'</div><br>';
	}
	public function __contruct() {
		$this->dbh = new PDO("mysql:dbname = blog; host = localhost;", 'root', '' );
	}

	public function createNew($author, $title, $excerpt, $content) {
		//it is not in our database, -1 to not mess it up with our actual data
		$this->setByParams( -1, date("d.m.Y h:m"), $author, $title, $excerpt, $content);
	}	

	
	//POST request
	public function createNewFromPOST($post) {
		imprime($post);
		$this->createNew(
			$post['post_author'],
			$post['post_title'],
			$post['post_excerpt'],
			$post['post_content']

		);

	}

	//Set by parameter I have
	public function setByParams($id, $date, $author, $title, $excerpt, $content) {
		$this->id = $id;
		$this->date = $date;
		$this->author = $author;
		$this->title = $title;
		$this->excerpt = $excerpt;
		$this->content = $content;
	}

	//Reading from database row
	public function setByRow($row) {
		print_r($row);
		$this->setbyParams(
			//acesso as partes da array criada com as informações
			$row['post_id'],
			$row['post_date'],
			$row['post_author'],
			$row['post_excerpt'],
			$row['post_title'],
			$row['post_content'],
		);
	}

	//SQL actions
	//: indica a informação dentro de uma variável - inserir infos na tabela
	public function sqlInsertEntry(){
		 $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$query ="INSERT INTO posts (post_date, post_author, post_excerpt, post_title, post_content) 
			VALUES (:post_date, :post_author, :post_excerpt, :post_title, :post_content);";
		//Statement variable. PDO. Cria um statement que vai ser interpretado pelo execute()
		//$statement: uma cadeia de caracteres que contém a instrução SQL
		$stmt = $this -> dbh-> prepare($query);
		//executa o statement preparado
		$result	= $stmt->execute(array(
			':post_date' => $this -> $date,
			':post_author' => $this -> $author,
			':post_excerpt' => $this -> $excerpt,
			':post_title' => $this -> $title,
			':post_content' => $this -> $content
		));
		$this->error = $this->dbh->errorInfo();
        print_r($this->error);
		//quero pegar o id do post adicionado
		$query = '	SELECT post_id
					FROM posts
					WHERE post_author = : post_author
					ORDER BY post_id,
					DESC LIMIT 1;';
					//limite de linhas a serem retornadas

		$stmt = $this -> dbh-> prepare($query);
		//atribuo o valor autor para a chave post_author da matriz
		$stmt->execute(array(
			':post_author' => $this -> $author
		));

		$this->error = $this->dbh->errorInfo();
        print_r($this->error);
		
		//retorna uma array indexada pelo nome da coluna
		$row = $stmt->fetch (PDO::FETCH_ASSOC);
		print_r($row);
		$this-> id = ['post_id'];
		return $result;
	}

	public function sqlSelectEntryById($post_id){
		$query = 'SELECT * FROM posts WHERE post_id = :post_id';
		$stmt = $this -> dbh-> prepare($query);
		$result	= $stmt->execute(array(
			':post_id' => $this -> $id
		));
		$this->error = $this->dbh->errorInfo();
        print_r($this->error);
		
		$entry = $stmt->fetch (PDO::FETCH_ASSOC);

		$this->setByRow($entry);
		print_r($entry);
		return $result;
	}

	public function sqlUpdateEntryById($post_id){
		$query = '	UPDATE posts SET
					post_author = :post_author, post_excerpt = :post_excerpt, post_title = :post_title, post_content = :post_content;
					WHERE post_id = :post_id;
					';
		$stmt = $this -> dbh-> prepare($query);

		$result	= $stmt->execute(array(
			':post_author' => $this -> $author,
			':post_excerpt' => $this -> $excerpt,
			':post_title' => $this -> $title,
			':post_content' => $this -> $content,
			':post_date' => $this -> $date
		));
		return $result;
	}

	//Validate that no HTMl text are beeing used
	private function validateString(){

	}

	//Id
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	//Date
	public function getDate() {
		return $this->date;
	}
	public function setDate($date) {
		$this->date = $date;
		return $this;
	}

	//Author
	public function getAuthor() {
		return $this->author;
	}
	public function setAuthor($author){
		$this->author = $author;
		return $this;
	}

	//Title
	public function getTitle(){
		return $this->title;
	}
	public function serTitle($title){
		$this->title = $title;
		return $this;
	}

	//Excerpt
	public function getExcerpt(){
		return $this->excerpt;
	}
	public function setExcerpt($excerpt){
		$this->excerpt = $excerpt;
		return $this;
	}

	//Content
	public function getContent(){
		return $this->content;
	}
	public function setContent($content){
		$this->content = $content;
		return $this;
	}
}

