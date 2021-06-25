		<div class="img-container-home">	
			<div class="inner-container" id="login">
				<span class="align-bottom"> Login </span>
			</div>
		</div>
	</div>	
	<div id="create_form">
		<display>SignUp</display>
		<form action="app/include/processa_login.php" method="POST">
			<div class="form-group">
				<label for="">Usuário</label>
				<input  type="text" name="usuario" id="user" class="form-control" placeholder="Escreva o seu usuário"></input>
				<label for="">Senha</label>
				<input type="password" name="senha" class="form-control" id="password" placeholder="Escreva a senha"></textarea>
				<input type="submit" name="login-btn" value="Publicar" class="btn btn-danger"></input>
			</div>
		</form>
	</div>