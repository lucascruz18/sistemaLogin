<?php require "pages/header.php"; ?>
<?php if(empty($_SESSION['cLogin'])) {
	?>
	<script type="text/javascript">window.location.href="../login.php"</script>
	<?php
	exit;
} ?>
    <br>
    <center>
    <h1>Welcome !</h1>
    <p>Sistema de Login, Sem Nenhuma Função. Feito Exclusivamente Para Realizar um Login e Cadastro de Usuários.</p>
    </center>
    
<?php require "pages/footer.php"; ?>