<?php 
    include_once('includes/php/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="includes/css/styles.css">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container">		
		<?php
		require_once 'includes/php/usuarios.class.php';
		$u = new Usuarios();
		if(isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$username = addslashes($_POST['username']);			
			$senha = $_POST['senha'];

			if(!empty($nome) && !empty($username) && !empty($senha)) {
				if($u->cadastrar($nome, $username, $senha)) {
					?>
					<div class="alert alert-success" role="alert">
						<strong>Parabéns!</strong> Cadastrado com Sucesso! <a href="login.php" class="alert-link">Faça o Login Agora !</a>
					</div>
					<?php
				} else {
					?>
					<div class="alert alert-warning" role="alert">
					 	Este Usuário Já Existe. <a href="login.php" class="alert-link">Faça o Login Agora !</a>
					</div>
					<?php					
				}
			} else {
				?>
				<div class="alert alert-warning" role="alert">
				  Preencha Todos os Campos!
				</div>
				<?php
			}
		}
		?>
		<div class="login-page">
			<div class="form">
				<h1>Cadastre-se</h1><br>
				<form class="login-form" method="POST">
					<div class="form-group">
						<label for="nome">Nome: </label>
						<input type="text" id="nome" name="nome" class="form-control" placeholder="Digite Seu Nome" />
					</div>
					<div class="form-group">
						<label for="username">Username: </label>
						<input type="text" id="username" name="username" class="form-control" placeholder="Escolha Um Username" />
					</div>					
					<div class="form-group">
						<label for="senha">Senha: </label>
						<input type="password" id="senha" name="senha" class="form-control" placeholder="Digite uma Senha" />
					</div>
					<button type="submit">Register</button><br><br>
					<strong><a href="login.php">Login</a></strong>
				</form>
			</div>
		</div>
</body>
</html>