<?php 
    include_once('includes/php/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="includes/css/main.css">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once('includes/php/usuarios.class.php');
        $u = new Usuarios();
        if(isset($_POST['username']) && !empty($_POST['username'])) {
            $username = addslashes($_POST['username']);
            $senha = $_POST['senha'];
            
            if ($u->login($username, $senha)) {
                ?>
                <script type="text/javascript">window.location.href="./"</script>
                <?php
            } else {
                ?>
                <div class="alert alert-danger">
                    Usuário e/ou Senha, Incorretos!
                </div>
                <?php
            }
        }
    ?>
    <div class="login-page">
        <div class="form">
            <h1>Sistema de Login</h1>
            <form class="login-form" method="POST">
                <input type="text" id="username" name="username" placeholder="Username"/>
                <input type="password" id="senha" name="senha" placeholder="Senha"/>
                <button type="submit">login</button>
                <br><br><strong><a href="register.php">Register</a></strong>
            </form>
        </div>
    </div>
</body>
</html>