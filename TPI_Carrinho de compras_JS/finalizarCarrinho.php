<html>
	<head>
		<link rel="icon" href="Imagens/order.png" type="image/png" />
		<title>
			Loja Hacker
		</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="lalala.css"/>
	</head>
	<div><div>
		<body background='logocomg.jpg' style="background-color:#66a3ff">
			<script language="Javascript">
				window.alert("OBRIGADO PELA PREFÊNCIA.");
		</script>
		<?php
			
			session_start();
			if (!(isset($_SESSION["idUser"]))) {
				header("Location:Entrar.php?logError");			
			}
			if(isset($_SESSION["contador"])){
			  	$contador = $_SESSION["contador"];
			}
			if(isset($_SESSION["qtdSessao"])){
			  	$qtdSessao = $_SESSION["qtdSessao"]; 	

				$conn = new PDO("mysql:host=localhost;dbname=loja", "root", "");

				for($i=1; $i<=$contador;$i++)				
				{
					$indice = "'produto$i'";
					if(isset($_SESSION[$indice])){
				   		$produto = $_SESSION[$indice];

						$stmt = $conn->prepare('INSERT INTO usuario_produto (idUsuario,idProduto) VALUES(?)(?)');
					   
						$stmt -> bindValue(1, $_SESSION['idUser']);
						$stmt -> bindValue(2, $produto );  
						$stmt -> execute(); 
					}
				}
				
				session_destroy();
				echo "<br><br><br><br><br><br><br><br><p>SESSÃO FINALIZADA, DADOS ARMAZENADOS!</p><br>";
			}
			else {
				echo 
				"<br><br><br><br><br><br><br><br><br><br><br><br>
				<ul>
			  		  	<li><a class='active' href='listarProduto.php'>Menu</a></li>
			  		  	<li><a href='Entrar.php'>Iniciar Sessão</a></li>
			  		  </ul>
						";
				echo "<div class='preco'> Nenhum produto Selecionado, volte pelo menu";
				
		    }	     
		?>
		<center><input class=button type="button" value="Voltar ao menu" onclick="window.location='listarProduto.php'" /></center>
		<br>
	</body>
	</div></div>
</html>






