<!DOCTYPE html>
<html>
	<head>
			<link rel="icon" href="Imagens/pessoa.ico" type="image/x-icon" />		
		<title> 
			Loja Hacker
		</title>
		<link rel="stylesheet" type="text/css" href="lalala.css"/>
		<script type="text/javascript">
			function verificar(){
				if (document.cadForm.senha.value==document.cadForm.confirmaSenha.value) {
					return true;
				}
				else{
					alert("As senhas devem ser iguais");
					document.cadForm.confirmaSenha.value="";
					return false;
				}
			}
		</script>
		<meta charset="utf-8"/>
	</head>
	<div class='planofundo'><div>
		<body background='logocomg.jpg' style="background-color:#66a3ff">
			
			<h1><p class='solid'>Bem vindo à Loja Hacker</p></h1>
			<br><br><br><br><br><br><br><br>
			<div align='center'>
				
				<br><br>
			<table>
				<tr>
					<td>
						<?php
					if(isset($_GET['cadError'])){
						if ($_GET['cadError']==0) {
							echo "<span class='produto'>Seus dados foram incluidos com sucesso, faça login para acessar o site</sapn>";
						}
											
					}
					elseif (isset($_GET['logError'])) {
						echo "<span class='preco'>Houve um erro no login, cheque seus dados e tente novamente</span>";
					}	
					else{
						echo "<div class='produto'>Já possui login ?</div>";
					}
				?>
					</td>
					
					<td>
						<?php
					if (isset($_GET['cadError'])) {
						if ($_GET['cadError']==1) {
							echo "<div class='preco'>Erro ao cadastrar os dados</div>";
						}
					}
					else{
						echo "<div class='produto'>É novo no site ?</div>";
					}
				?>
					</td>
				</tr>
				<tr>
					<td>
					<center>
				<form action="login.php" method="POST"/>
					<table class='entrar'>
						
						<tr>
							<td><div class='titulo'>Email:</div></td>
							<td><input type="email" name="email" required="true" ></td>
						</tr>
						<tr>
							<td>
								<div class='titulo'>Senha:</div>
							</td>
							<td>
								<input type="password" name="senha" required="true" />
							</td>
						</tr>
						<tr>	
							<td>			
								<input class='titulo' type="submit" name="Btnsubmit" value="Entrar">
							</td>
						</tr>	
					</table>
					
				</form>
				</center>
				</td>
				
				<td>
				<form action="cad.php" method="POST" name="cadForm" onsubmit="return verificar();">
					<table class='entrar' align='center'>	
						<tr>
							<td>
								<div class='titulo'>Nome:</div>
							</td>
							<td>	
								<input type="text" name="nome"/ required="true">
							</td>
						</tr>							
						<tr>
							<td>
								<div class='titulo'>Sobrenome:</div>
							</td>
							<td>
								<input type="text" name="sobrenome"/>
							</td>
						</tr>		
						<tr>
							<td>
								<div class='titulo'>Email:</div>
							</td>
							<td>
								<input type="Email" name="email"/ required="true">
							</td>
						</tr>		
						<tr>
							<td>
								<div class='titulo'>Senha:</div>
							</td>
							<td>
								<input type="password" name="senha"/ required="true">
							</td>
						</tr>		
						<tr>
							<td>
								<div class='titulo'>Confirmar Senha:</div>
							</td>
							<td>
								<input type="password" name="confirmaSenha"/ required="true">
							</td>
						</tr>	
						<tr>
							<td>
								<input class='titulo' type="submit" name="Btnsubmit" value="Enviar"/>
							</td>
						</tr>
					</table>
				</form>
					</td>
				</tr>
			</table>
				<br/>			
			</div>
			<br/><br/><br/><br/>
			<div>
				
				
				<br/><br/>
				
			</div>
		</body>
	</div></div>
</html>