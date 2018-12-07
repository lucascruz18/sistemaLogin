<?php 
include_once('includes/php/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Rotas</title>
    <link rel="stylesheet" href="includes/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono|Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid collapse navbar-collapse">
		  	<div class="navbar-header">
		  		<a class="text-header" href="./">Sistema de Login</a>
		  	</div>
		    <ul class="nav navbar-nav">
		    	<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): 
		    	require 'includes/php/usuarios.class.php'
		    	?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Relatórios
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Em Manutenção</a>
							<a class="dropdown-item" href="#">Em Manutenção</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Em Manutenção</a>
						</div>
					</li>
			      <li class="nav-item">
			        <a href="./" class="nav-link text-success">Olá - <?php echo Usuarios::exibeNome($_SESSION['cLogin']); ?></a>
			      </li>
			      <li class="nav-item">
			        <a href="#" class="nav-link text-primary">Cadastrar</a>
			      </li>
			      <li class="nav-item">
			        <a href="sair.php" class="nav-link text-danger">Sair</a>
			      </li>
				<?php else: ?>		      
			      <script type="text/javascript">window.location.href="../login.php"</script>
			    <?php endif; ?>
		     </ul>
		</div>
	</nav>  