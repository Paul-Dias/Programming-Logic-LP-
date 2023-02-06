<?php
	$email=$_POST['email'];
	$senha=$_POST['senha'];

	$conn = new PDO("mysql:host=localhost;dbname=loja", "root", "");
	$sql = $conn -> prepare('select id,senha,email,nome from usuario where senha=? and email=?');
	$sql -> bindValue(1,$senha);
	$sql -> bindValue(2,$email);

	if(!($sql -> execute())){
		header("Location:Entrar.php?logError=1");
	}
	else{
		if ($sql -> rowCount()>0){
			$campo = $sql -> fetch(PDO::FETCH_OBJ);
			session_start();
			$_SESSION['nomeUser']=$campo-> nome;
			$_SESSION['idUser']= $campo-> id;

			header('Location:listarProduto.php');		
		}else header("Location:Entrar.php?logError=1");		
	}

?>