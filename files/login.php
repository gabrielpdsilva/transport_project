<html>
<head>
	<meta charset="utf-8">
	<title>Faça login para continuar</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<form class="box" method="POST" action="login.php">
		<h1>Login</h1>
		<div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input type="text" placeholder="E-mail" name="email" value="">
		</div>

		<div class="textbox">
			<input type="password" placeholder="Senha" name="senha" value="">
		</div>

			<input class= "btn" type="submit" name="entrar" value="Entrar">
	</form>

	<?php 
		// verifica se os valores foram definidos
		if(isset($_POST['email']) && isset($_POST['senha'])){
			$email = $_POST['email'];	// email
			$senha = $_POST['senha'];	// senha

			if($email == 'email123'/* need to change */ && $senha == 'admin123' /* need to change */){
				
			}
		}
	?>
</body>
</html>