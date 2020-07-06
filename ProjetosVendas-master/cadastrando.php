<?php 
	$host = "localhost";
	$user = "root";
	$senha = "vertrigo";
	$bd = "login";

//Cria a conexao com o bd
	$sql = mysqli_connect($host,$user,$senha,$bd);
	if (!$sql) {
		die("Falha ao Conectar ao Banco!!!".mysqli_connect_error());
	}else{
		// //echo "Conexao realizada com sucesso";
	}
 ?>