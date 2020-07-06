<?php 
	include_once("cadastrando.php");
	$nome = $_REQUEST['nome'];
	$telefone = $_REQUEST['telefone'];
	$endereco = $_REQUEST['endereco'];
	$email = $_REQUEST['email'];
	$senha = $_REQUEST['senha'];
	$confsenha = $_REQUEST['confsenha'];

	$link = "INSERT INTO clientes(nome,endereco,telefone,email,senha,confsenha)VALUES('$nome','$endereco','$telefone','$email','$senha','$confsenha')";
	$resul = mysqli_query($sql,$link);
	echo "<h1>Cadastrado com sucesso!!!</h1><br>";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Finalizando Cadastro...</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="index.html">Voltar para Home</a>
</body>
</html>