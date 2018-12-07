<?php 
/**
 * 
 */
class Usuarios {

	public function cadastrar($nome, $username, $senha) {
		global $pdo;
		$sql = $pdo->prepare("SELECT * 
			        		  FROM usuarios 
			        		  WHERE username = :username");
		$sql->bindValue(":username", $username);
		$sql->execute();

		if($sql->rowCount() == 0) {

			$sql = $pdo->prepare("INSERT INTO usuarios 
								  SET nome = :nome, username = :username, senha = :senha");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":username", $username);			
			$sql->bindValue(":senha", md5($senha));			
			$sql->execute();

			return true;

		} else {
			return false;
		}
	}
	
	public function login($username, $senha) {

		global $pdo;

		$sql = $pdo->prepare("SELECT id 
							  FROM usuarios 
							  WHERE username = :username 
							  AND senha = :senha");
		$sql->bindValue(":username", $username);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if ($sql->rowCount() > 0) {
			
			$dado = $sql->fetch();
			$_SESSION['cLogin'] = $dado['id'];
			return true;

		} else {
			return false;
		}

	}

	public static function exibeNome($id_usuario) {

		global $pdo;

		$sql = $pdo->prepare("SELECT nome 
			 				  FROM usuarios 
			 				  WHERE id = :id");
		$sql->bindValue(":id", $id_usuario);
		$sql->execute();

		if ($sql->rowCount() > 0) {

			$dado = $sql->fetch();
			return $dado['nome'];

		}
	}
}
?>