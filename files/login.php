<html>
<head>
	<meta charset="utf-8">
	<title>Faça login para continuar</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<form class="box" method="POST" action="login.php">
		<h1>Login</h1>
		<div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input type="email" placeholder="E-mail" name="email" value="">
		</div>

		<div class="textbox">
			<input type="password" placeholder="Senha" name="senha" value="">
		</div>

			<input class="btn" type="submit" name="entrar" value="Entrar">

		<a href="recuperar-senha.php"> esqueci minha senha. </a>
	</form>
		
	<?php 
		// verifica se os valores foram definidos

		// (se estão definidos e não estão vazios)
		if(isset($_POST['email']) && !empty($_POST['email'])
		&&	isset($_POST['senha']) && !empty($_POST['senha'])){
			$email = $_POST['email'];	// email
			$senha = $_POST['senha'];	// senha

			if($email == 'admin@business.com'/* precisa mudar */ && $senha == 'admin123' /* precisa mudar */){
				header("location:cargas.php");
				exit(0);
			}

			else{
				echo "<div class=\"box\"> email/senha incorretos. </div>";
			}
		}

		
	?>
</body>
</html>