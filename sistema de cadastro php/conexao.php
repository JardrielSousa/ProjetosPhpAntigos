<?php 
	$host = "localhost";
	$user = "root";
	$senha = "vertrigo";
	$bd = "login";
	 //Criar a conexao
    $conn = mysqli_connect($host, $user, $senha, $bd);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }
    
