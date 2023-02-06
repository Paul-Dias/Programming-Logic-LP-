<?php
	$nome=$_POST['nome'];
	$sobrenome = (isset($_POST['sobrenome'])) ? $_POST['sobrenome'] : null ;
	$email=$_POST['email'];
	$senha=$_POST['senha'];

	$conn = new PDO("mysql:host=localhost;dbname=loja", "root", "");
	$sql = $conn -> prepare('insert into usuario(nome,sobrenome,email,senha) values(?,?,?,?)');
	$sql -> bindValue(1,$nome,PDO::PARAM_STR);
	$sql -> bindValue(2,$sobrenome,PDO::PARAM_STR);
	$sql -> bindValue(3,$email,PDO::PARAM_STR);
	$sql -> bindValue(4,$senha,PDO::PARAM_STR);
	
	if($sql -> execute()){
		header("Location:Entrar.php?cadError=0");
	}
	else{
		header("Location:Entrar.php?cadError=1");
	}

?>