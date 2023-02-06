<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="Imagens/hacker.ico" type="image/x-icon" />
		<meta charset="UTF-8"/>
		<title>Loja Hacker</title>		
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.31.0/dist/sweetalert2.all.min.js"></script>
		 <script type="text/javascript"> 
			function addProd(id) {
				swal({
					title: '',
					html: '<img src="Imagens/boa.gif" width=180 height=125/>',
					
				})
				.then( (resolve) => {
					window.location='adicionarProduto.php?idproduto='+id;
				})
			} 
		 </script>
		 
		 
	</head>	
		<body background='logocomg.jpg' style="background-color:#66a3ff">
		<link rel="stylesheet" type="text/css" href="lala.css"/>
		  	<?php
		  		session_start();
				
		  		if (isset($_SESSION['nomeUser'])) {
		  			echo "
						<div class='planofundos'>
		  				<br><br>
			  			<p class='bem'>
			  				Bem vindo ".$_SESSION['nomeUser']."
			  			</p><br>
		  			";
					
					$usuario = $_SESSION['nomeUser'];
		  		}
		  		else{
		  			echo "
		  			<div class='planofundos'>
		  			
		  			";
				}
				
				header('Content-Type: text/html; charset=UTF-8');
			
				$dsn = "mysql:host=localhost;dbname=loja;charset=utf8";
				$opcoes = array(
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
				);
				$conecta = new PDO($dsn,"root","", $opcoes);
				
				echo "
					<center>
						<ul>
							<li><a href='listarProduto.php' ><img src='Imagens/casa.png' width ='25px' height='25px'>&nbsp;Menu</a></li>
							<li><a href='listarCarrinho.php'><img src='Imagens/car.png' width ='25px' height='25px'>&nbsp;Carrinho</a></li>
							<li><a href='sobre.html'><img src='Imagens/infor.png' width ='25px' height='25px'>&nbsp;Sobre</a></li>
						
				";
				if(isset($usuario)){
					$sql = $conecta->prepare("select * from usuario where '$usuario' = nome");
				
					if($sql -> execute()){
						while ($campo = $sql -> fetch (PDO::FETCH_OBJ)){
							if($campo -> tipo == 'root'){
								$user = $campo -> tipo;
							}
						}
					}
				}
				/*
				 if ((isset($_SESSION['idUser']))) {		  		  		
					echo '
			  			<li style="float:right"><a href="Entrar.php">Sair</a></li>
		  		  	';
		  		} */
				
				  if (!(isset($_SESSION['idUser']))) {		  		  		
					echo '
			  			<li style="float:right"><a href="Entrar.php">Entrar</a></li>
		  		  	';
		  		}
				
				 else if($user == "root"){
					echo "
						<li style='float:right'><a href = 'administrar.php?usuario=$usuario'><img src='Imagens/administrador.png' width ='25px' height='25px'>Adiministrar</a></li>
					";
				}
				 
				
				
						
		  	?>
			</ul>
				<br>
				
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
						<div class="item active">
						  <img src="Imagens/num.jpg">
						  <div class="carousel-caption">
						  </div>
						</div>

						<div class="item">
						  <img src="Imagens/tec.jpg">
						  <div class="carousel-caption">
						  </div>
						</div>

						<div class="item">
						  <img src="Imagens/vrc.jpg">
						  <div class="carousel-caption">
						  </div>
						</div>
					  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
				
				<tr>
					<h1	align='center'><font size='70' color='red'><b>Produtos</b></font></h1>
				</tr>
				
				<ul>
					<li>
						<center>
							<?php
								if(isset($usuario)){
									echo "<form method = 'POST' action = 'listarProduto.php?usuario=$usuario'>
											<select name = 'ordem' class='filtro'>
												<option>Ordenar por:</option>
												<option value = 'none' name = 'ordem'>Nenhum</a></option>
												<option value = 'Cresc' name = 'ordem'>Menor preço</option>
												<option value = 'Desc' name = 'ordem'>Maior preço</option>
											</select>
											<input type = 'submit' value = 'Filtrar' class='filtro'>
										</form>";
								}
								else{
									echo "<form method = 'POST' action = 'listarProduto.php' >
											<select name = 'ordem' class='filtro'>
												<option>Ordenar por:</option>
												<option value = 'none'>Nenhum</option>
												<option value = 'Cresc'>Menor preço</option>
												<option value = 'Desc'><a href='listarProduto.php?ordem=desc'>Maior preço</option>
											</select>
											<input type = 'submit' value = 'filtrar' class='filtro'>
										</form>";
								}
							?>
						</center>
					</li>
				</ul>
				
			</center>
			<?php
			$marca ="?";
			if (isset($_POST["marca"])) $marca=$_POST["marca"];

			echo"<br>";
		 	$conecta = new PDO("mysql:host=localhost;dbname=loja", "root", "");
			
			$conecta->exec("set names utf8");

			if(isset($_POST['ordem'])){
				$ordem = $_POST['ordem'];
			}
			else{
				$ordem = null;
			}
			if($ordem == null || $ordem == 'none'){
				if($marca =="?"){
					$sql = $conecta->prepare("select * from produto");
				}
				else{
					$sql = $conecta->prepare("select * from produto where marca like'".$marca."%'"); //arrumar
				}
			}
			else if($ordem == "Cresc"){
				if($marca =="?"){
					$sql = $conecta->prepare("select * from produto order by preco asc");
				}
				else{
					$sql = $conecta->prepare("select * from produto where marca like'".$marca."%' order by preco asc"); //arrumar
				}
			}
			else if($ordem == "Desc"){
				if($marca =="?"){
					$sql = $conecta->prepare("select * from produto order by preco desc");
				}
				else{
					$sql = $conecta->prepare("select * from produto where marca like'".$marca."%' order by preco desc"); //arrumar
				}
			}

		   	if($sql -> execute()){ 
				if ($sql -> rowCount() > 0){ // há informações?	   
					echo "<center><table style='background-color:white; text-align:center;' border class='borda'width=70%>";	   
					echo "<tr>";
					$col=0;	   
					while ($campo = $sql -> fetch (PDO::FETCH_OBJ)){

						$col++;
						echo "<td>";
						echo "<div class='produto'>".$campo ->descricao."</div>";
						echo "<center><img src='".$campo -> imagem ."' width ='200' height='150' ></center><div class='texto'>".$campo -> produto ."</div><br>"; //mostra imagem
						echo "<meta charset:'utf-8'>";
						echo "<div class='preco'>Preço: R$ ".$campo-> preco."";
						echo"<br>";
						for($i=1; $i<= $campo-> estrelas;$i++){
							echo "<img src='Imagens/estrela.jpeg' width='32' height='32'>";
						}
						if($campo->estrelas<5){
							$estcinza=5-$campo-> estrelas;
							for($i=1;$i<=$estcinza;$i++){
								echo"<img src='Imagens/estrelacinza.jpg' width='32' height='32'>";
							}
						}
						
						
						// obs.: O script chama um outro programa passando a tarefa adicionar o idproduto
						echo "<br><br><button onclick='addProd(".$campo -> idproduto.")'>
										<img src='Imagens/comprar.png' width=180 height=45/>
										
								  </a>"; 
								 
						echo "</td>";
						
						
						if ($col>2) { 
							  echo "</tr>";
							  $col=0;
						} 
					}
			  	} 
			}     
		 	echo "</table></center>";
		 	?>
			<br/><br/><br/>
					<div>
						<ul><BR>			
							SAC: 98882-5455<img src='Imagens/kk.png' align='right'><br>		
							E-mail: lojaHacker@gmail.com<br>
							WE KNOW WHAT WE ARE.<br>
							JOIN US. CONTACT : lojaHacker@gmail.com<BR>
							<text align='left' >&copy; Carrrinho_Nivel_Carlos. Design: Paulão. Images: Internetilimited</text>
					
							
						</ul>
						
					
					<ul>		
					
											
					
					</ul>
					</div>
		</body>
		</div>
	
</html>
 
             