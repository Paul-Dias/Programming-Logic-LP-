<html>
	<head>
		<link rel="icon" href="Imagens/administrador.png" type="image/x-icon" />
		<meta charset="UTF-8"/>
		<title>Administrar</title>		
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		 <link rel="stylesheet" type="text/css" href="lalala.css"/>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>	
	<body background='logocomg.jpg' style="background-color:#66a3ff">
		<link rel="stylesheet" type="text/css" href="lala.css"/>
		
		<?php
		  	session_start();
				
		  	header('Content-Type: text/html; charset=UTF-8');
			
			$dsn = "mysql:host=localhost;dbname=loja;charset=utf8";
			$opcoes = array(
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
			);
			$conecta = new PDO($dsn,"root","", $opcoes);
			
			if (isset($_GET['usuario'])) {
		  		$usuario = $_GET["usuario"];
		  	}
			else{
				header("location: listarproduto.php");
			}
			echo "
				<center>
					<ul>
			  		  	<li><a class='active' href='listarProduto.php' ><img src='Imagens/casa.png' width ='25px' height='25px'>&nbsp;Menu</a></li>
			  		  	<li><a href='listarCarrinho.php'><img src='Imagens/car.png' width ='25px' height='25px'>&nbsp;Carrinho</a></li>
						<li><a href='sobre.html'><img src='Imagens/infor.png' width ='25px' height='25px'>&nbsp;Sobre</a></li>
					</ul>
					<br><br>
			";
			
			if(isset($_GET["funcao"])){
				$funcao = $_GET["funcao"];
			}
			else{
				$funcao = null;
			}
			
			if($funcao == null){
				echo $funcao;
				
				echo "	
					<table>
						<tr>
							<td>
								<form method = 'POST' action = 'administrar.php?usuario=$usuario'>
									<input type='button' value = 'Adicionar produto' onclick=window.location='administrar.php?usuario=$usuario&funcao=adicionar'>
									<input type='button' value = 'Deletar produto' onclick=window.location='administrar.php?usuario=$usuario&funcao=deletar'>
									<input type='button' value = 'Atualizar produto' onclick=window.location='administrar.php?usuario=$usuario&funcao=atualizar'>
					
								</form>
							</td>
						</tr>
					</table>
				";
			}
			else if($funcao == "adicionar"){				
				$nome = null;
				if(isset($_POST["nome"])){
					$nome = $_POST["nome"];
				}
				
				if(isset($_POST["descricao"])){
					$descricao = $_POST["descricao"];
				}
				
				if(isset($_POST["nomeImg"])){
					$nomeImg = $_POST["nomeImg"];
				}
				
				if(isset($_POST["preco"])){
					$preco = $_POST["preco"];
				}
				
				if(isset($_POST["qualidade"])){
					$qualidade = $_POST["qualidade"];
				}
				
				if(isset($_POST["Marca"])){
					$Marca	 = $_POST["Marca"];
				}
				
				if($nome == null || $descricao == null || $nomeImg == null || $preco == null || $qualidade == null || $Marca == null){
					echo "
						<table>
							<tr>
								<td>
									<form method = 'POST' action = 'administrar.php?usuario=$usuario&funcao=adicionar'>
										Nome:<input type = 'text' name = 'nome'><br>
										Descrição:<input type = 'text' name = 'descricao'><br>
										Nome da imagem:<input type = 'text' name = 'nomeImg'><br>(colocar extensão Ex:imagem1.png)<br>
										Preço:<input type = 'decimal' name = 'preco'><br>
										Qualidade:<input type = 'text' name = 'qualidade'>(De 1-5)<br>
										Marca:<input type = 'text' name = 'Marca'><br>
										<br><br>
										<input type = 'submit' value = 'Adcionar'>
									</form>
								</td>
							</tr>
						</table>
					";
				}
				else{
					$sql = $conecta -> prepare ("Insert into produto(descricao,produto,imagem,preco,estrelas,marca) values ('$nome','$descricao','Imagens/$nomeImg',$preco,$qualidade,'$Marca')");
					
					if($sql -> execute()){
						header ("location: listarProduto.php?usuario=$usuario");
					}
					else{
						echo "Dados inseridos estão incorretos";
					}
				}
			}
			else if($funcao == "deletar"){
				$nome = null;
				
				if(isset($_POST["nome"])){
					$nome = $_POST["nome"];
				}
				
				if($nome == null){
					echo "
						<table>
							<tr>
								<td>
									<form method = 'POST' action = 'administrar.php?usuario=$usuario&funcao=deletar'>
										Nome:<input type = 'text' name = 'nome'><br>
										
										<input type = 'submit' value = 'Deletar'>
									</form>
								</td>
							</tr>
						</table>
					";
				}
				else{
					$sql = $conecta -> prepare("delete from produto where descricao = '$nome'");
					
					if($sql -> execute()){
						header ("location: listarProduto.php?usuario=$usuario");
					}
					else{
						echo "Dados inseridos estão incorretos";
					}
				}
			}
			else if($funcao == "atualizar"){
				$cont = 0;
				
				if(isset($_POST["NomeInicial"])){
					if($_POST["NomeInicial"] != null){
						$nomeInicial = $_POST["NomeInicial"];
						$_SESSION["nomeInicial"]=$nomeInicial;
					}
					else{
						echo "Dados inseridos estão incorretos.";
					}
				}
				
				if(isset($_POST["nome"])){
					$nome = $_POST["nome"];
					
					if($nome != null){
						$nomeInicial = $_SESSION["nomeInicial"];
						
						$sql = $conecta -> prepare("update produto set descricao = '$nome' where descricao = '$nomeInicial'");
						
						if($sql -> execute()){
							$nomeInicial = $nome;
							$_SESSION["nomeInicial"]=$nome;
						}
					}
					
					$cont = 1;
				}
				else{
					$nome = null;
				}
				
				if(isset($_POST["descricao"])){
					$descricao = $_POST["descricao"];
					
					if($descricao != null){
						$nomeInicial = $_SESSION["nomeInicial"];
						
						$sql = $conecta -> prepare("update produto set produto = '$descricao' where descricao = '$nomeInicial'");
						
						if($sql -> execute()){
							
						}
					}
					
					$cont = 1;
				}
				else{
					$descricao = null;
				}
				
				if(isset($_POST["nomeImg"])){
					$nomeImg = $_POST["nomeImg"];
					
					if($nomeImg != null){
						$nomeInicial = $_SESSION["nomeInicial"];
						
						$sql = $conecta -> prepare("update produto set imagem = 'Imagens/$nomeImg' where descricao = '$nomeInicial'");
						
						if($sql -> execute()){
							
						}
					}
					
					$cont = 1;
				}
				else{
					$nomeImg = null;
				}
				
				if(isset($_POST["preco"])){
					$preco = $_POST["preco"];
					
					if($preco != null){
						$nomeInicial = $_SESSION["nomeInicial"];
						
						$sql = $conecta -> prepare("update produto set preco = $preco where descricao = '$nomeInicial'");
												
						if($sql -> execute()){
							
						}
					}
					
					$cont = 1;
				}
				else{
					$preco = null;
				}
				
				if(isset($_POST["qualidade"])){
					$qualidade = $_POST["qualidade"];
					
					if($qualidade != null){
						$nomeInicial = $_SESSION["nomeInicial"];
						
						$sql = $conecta -> prepare("update produto set estrelas = $qualidade where descricao = '$nomeInicial'");
						
						if($sql -> execute()){
							
						}
					}
					
					$cont = 1;
				}
				else{
					$qualidade = null;
				}
				
				if(isset($_POST["Marca"])){
					$Marca	 = $_POST["Marca"];
					
					if($Marca != null){
						$nomeInicial = $_SESSION["nomeInicial"];
						
						$sql = $conecta -> prepare("update produto set marca = '$Marca' where descricao = '$nomeInicial'");
						
						if($sql -> execute()){
							
						}
					}
					
					$cont = 1;
				}
				else{
					$Marca = null;
				}
				
				if($cont == 1){
					header("location: listarProduto.php?usuario=$usuario");
				}
				
				if(isset($_GET["atualizacao"])){
					$atualizacao = $_GET["atualizacao"];
				}	
				else{
					$atualizacao = null;
				}
				
				if($nome == null && $descricao == null && $nomeImg == null && $preco == null && $qualidade == null && $Marca == null){
					if($atualizacao == null){
						echo "
							<table>
								<tr>
									<td>
										<form method = 'POST' action = 'administrar.php?usuario=$usuario&funcao=atualizar&atualizacao=sim'>
											Nome do produto:<input type = 'text' name = 'NomeInicial'>
											<br><br><br>
											<input type = 'submit' value = 'Atualizar'>
										</form>
									</td>
								</tr>
							</table>
						";
					}
					else{
						echo "
							<table>
								<tr>
									<td>
										<form method = 'POST' action = 'administrar.php?usuario=$usuario&funcao=atualizar&atualizacao=sim'>
											Nome:<input type = 'text' name = 'nome'><br>
											Descrição:<input type = 'text' name = 'descricao'><br>
											Nome da imagem:<input type = 'text' name = 'nomeImg'><br>(colocar extensão Ex:imagem1.png)<br>
											Preço:<input type = 'decimal' name = 'preco'><br>
											Qualidade:<input type = 'text' name = 'qualidade'>(De 1-5)<br>
											Marca:<input type = 'text' name = 'Marca'><br>
											<br><br>
											<input type = 'submit' value = 'Atualizar'>
										</form>
									</td>
								</tr>
							</table>
						";
					}
				}
			}
		?>