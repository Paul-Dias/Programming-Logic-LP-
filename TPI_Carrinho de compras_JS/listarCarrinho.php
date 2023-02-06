<html>
	<head>
		<title>Meu carrinho</title>
		<link rel="icon" href="Imagens/car.png" type="image/png" />	
		<link rel="stylesheet" type="text/css" href="lala.css"/>
		<meta charset="UTF-8"/>
	</head>	
		<div class='planofundos'>
				<body background='logocomg.jpg' style="background-color:#66a3ff">

		<?php
		 	
		 	session_start();
		  	echo "<br><p class='solid'> Listar Carrinho </p>";
		  	echo "<br><br><ul>
  		  				<li><a href='listarProduto.php' ><img src='Imagens/casa.png' width ='25px' height='25px'>&nbsp;Menu</a></li>
			  		  	<li><a href='listarCarrinho.php'><img src='Imagens/car.png' width ='25px' height='25px'>&nbsp;Carrinho</a></li>
						<li><a href='sobre.html'><img src='Imagens/infor.png' width ='25px' height='25px'>&nbsp;Sobre</a></li>
				</ul>";
		  	
		  	//conta os produtos selecionados
		  	if (isset($_SESSION["contador"])){ 		  		
		  		$contador=$_SESSION["contador"];
		  	}
		  	else{
		      $contador=0;
		  	}

		  	if (isset($_SESSION["qtdSessao"])){ 		  		
		  		$qtdSessao=$_SESSION["qtdSessao"];
		  	}
		  	else{
		      $qtdSessao=0;
		  	}

			if(isset($_GET['Remover'])){
				$produtoRem=$_GET['Remover'];
				$contador=$contador-1;
			}
			else $produtoRem ='';

		  	echo "<div class='produto'>Total de Produtos: $contador <br><br>";
			
				// cria variável na sessão -individual para cada seleção
				$indice = "'produto$contador'";
				$_SESSION["contador"]=$contador;
				$_SESSION["qtdSessao"]=$qtdSessao;
				
				$i=0; //contador
				$valortotal=0; //conta o preço dos produtos
				echo "Selecionados: <br>";
				
				$removido="false";
				for($i=1; $i<=$qtdSessao;$i++){
					$indice = "'produto$i'";
					if (isset($_SESSION[$indice])) {
				    	//$valor = isset($_SESSION[$indice]) ? $_SESSION[$indice]:"";
				    	$valor = $_SESSION[$indice];

				    	//remove produto					
						if ($produtoRem==$i && $removido="false"){
							unset($_SESSION[$indice]);//remove da sessão
							$removido="true";
							header("Location:listarCarrinho.php");
						}					
						else{

					    	$conecta = new PDO("mysql:host=localhost;dbname=loja", "root", "");
					    	$sql = $conecta->prepare('select * from produto where idproduto=:valor');
					    	$sql -> bindValue(':valor',$valor);
					    	
					    	//testes de funcionamento
					    	if($sql -> execute()){ 
								if ($sql -> rowCount() > 0){
										
										$campo = $sql -> fetch (PDO::FETCH_OBJ);
										echo "<table align='center' class='list'>";
									
										echo"<td class='list'>";
										echo "<img src='".$campo -> imagem."' width=100 height=100>";
										echo "<div class='produto'>".$campo ->descricao."</div>";
										echo "<div class='preco'>Preço:R$ ".$campo-> preco."</div>";							
										echo "<td>
											<a href='listarCarrinho.php?Remover=$i'>
												 <img src='Imagens/remover.png'  width=55 height=85>
											</a></td><br>
										";	
									
										
										echo "</table>";
										$valortotal= $valortotal + $campo -> preco;
								}
								else{
									die('Nenhum produto adicionado');
								}
							}
						}
					}			   	
				}

			if (isset($_POST["entrega"])){ 		  		
		  		if ($_POST["entrega"]=="Sedex") {
		  			$valortotal=$valortotal+30.00;
		  		}
		  		elseif($_POST["entrega"]=="PAC"){
		  			$valortotal=$valortotal+15.00;
		  		}
		  		elseif($_POST["entrega"]=="TNT"){
		  			$valortotal=$valortotal+18.99;
		  		}
		  	}
		  	else{
		?>
			<form action="listarCarrinho.php" method="POST">
				<br><br><div align='center'>
					Selecione o método de entrega:<br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="entrega" value="Sedex">SEDEX-R$30.00</input><br/>
					<input type="radio" name="entrega" value="PAC">PAC-R$15.00</input><br/>
					<input type="radio" name="entrega" value="TNT">TNT-R$18.99</input><br/>
				<br><br></div>
				<input class='button' type="submit" value="Calcular frete">
			</form>
		<?php
		  	}				
			echo "<br/><br/>
			</div><ul><div class='preco'>Valor Total:R$ $valortotal</div><ul>";

		?>
		<br/><br/><br/>
		<center>
			<input class='button' type="button" value="Finalizar" onclick="window.location='finalizarCarrinho.php'" />
			<!--<input class='button' type="button" value="Imprimir" onclick="window.location='nota.php'" />-->
		</center>
	</body></div></div>
</html>