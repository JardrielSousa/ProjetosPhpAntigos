<?php 
	include_once ("conexao.php");
	$nome = $_REQUEST['nome'];
	$email = $_REQUEST['email'];
	$senha = $_REQUEST['senha'];

	$resul = "INSERT INTO cadastro(nome,email,senha)VALUES('$nome','$email','$senha')";
	$resul_user = mysqli_query($conn,$resul);


	if(empty($final)){
		$_SESSION['Errologin'] = "Error : Usuários ou Senha Invalidos";
		header("location:index.php");
	}else{
		$_SESSION['idnome'] = $final['nome'];
		$_SESSION['idemail'] = $final['email'];
		$_SESSION['idsenha'] = $final['senha'];
		header("location:logado.php");

	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Finalizando Cadastro</title>
 </head>
 <body>
 	<h1>Cadastrado com sucesso !!</h1>
 	<script>
 		alert("Cadastrado com Sucesso!!!");
 	</script>
 	<a href="index.php">Voltar</a>
 </body>
 </html>