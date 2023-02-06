<html>
	<body style="background-color:#66a3ff;">
	
		<?php
		  session_start();

		  if (isset($_SESSION["contador"])) $contador=$_SESSION["contador"];
		  else
		      $contador=0;

		  $contador++;

		   if (isset($_SESSION["qtdSessao"])) $qtdSessao=$_SESSION["qtdSessao"];
		  else
		      $qtdSessao=0;

		  $qtdSessao++;
		  $_SESSION["qtdSessao"]=$qtdSessao;
		 
		   if (isset($_GET["idproduto"])) $idproduto=$_GET["idproduto"];
		  else{
				$idproduto="?"; 
				$contador=0;	
			}
		     
		  	if ($contador>0){
			  // cria variável na sessão -individual para cada seleção
			  $indice = "'produto$contador'";
			  // relaciona variável com idproduto
			  $_SESSION[$indice]=$idproduto;
			  //atualiza sessão
			  $_SESSION["contador"]=$contador;					  
			 
			}
			header("Location:listarProduto.php?adicionado=1");  
		?>			
	</body>
</html>






