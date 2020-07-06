<?php 
	
	try{
	$pdo = new PDO('mysql:host=localhost;dbname=login','root','vertrigo');

	$pdo->setAttribute(PDO::ATTR_ERROMODE,PDO::ERRMODE_EXCEPTION);

	$stmt = $pdo->prepare();
	$stmt->execute();
}catch(PDOException $e){
	echo "Erro ao conectar" .$e->getMessage();
}


?>