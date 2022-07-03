<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="PHP-01.css">
	<title>PHP-01</title>
</head>

<!-- HTML ------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------->

<body>

<h1>CADASTRO SIMPLES</h1>

<div class="box">
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="main-form" >
		<div class="form-group">
			<label for="nome">NOME:</label>
			<input id="nome" type="text" name="nome" maxlength="20" placeholder="Entre seu nome completo:"/>
		</div>
	
		<div class="form-group">
			<label for="cpf">CPF:</label>
			<input id="cpf" type="text" name="cpf" maxlength="14" placeholder="Entre com seu CPF:"/>
		</div>
	
		<div class="form-group">
			<label for="endereco">ENDEREÇO:</label>
			<input id="endereco" type="text" name="endereco" maxlength="30" placeholder="Entre com seu Endereço:"/>
		</div>
		<input type="submit" class="button"/>
	</form>
</div>

<br>
<!-- PHP -------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------->
<br>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<h1>DADOS DIGITADOS PELO USUARIO</h1>";
  echo "<h3>NOME...........: ".$_POST['nome']."</h3>";
  echo "<h3>CPF................: ".$_POST['cpf']."</h3>";
  echo "<h3>ENDERECO.: ".$_POST['endereco']."</h3>";
  echo "<br>";
  echo "<h3>O nome possui........: ".strlen($_POST['nome'])." caracteres.</h3>";
  echo "<h3>O cpf possui............: ".strlen($_POST['cpf'])." caracteres.</h3>";
  echo "<h3>O emdereco possui.: ".strlen($_POST['endereco'])." caracteres.</h3>";
  echo "<br>";
  echo "<h2>NOME INVERTIDO: [".strrev($_POST['nome'])."]</h2>";
}

?>


</body>
</html>