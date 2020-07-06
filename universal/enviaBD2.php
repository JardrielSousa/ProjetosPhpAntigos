<?php
include('conexaoBD.php');

        $descricao01 = $_POST['descricao01'];
        $descricao02 = $_POST['descricao02'];
		$descricao03 = $_POST['descricao03'];
		$descricao04 = $_POST['descricao04'];
        $descricao05 = $_POST['descricao05'];
		$descricao06 = $_POST['descricao06'];
		$descricao07 = $_POST['descricao07'];
        $descricao08 = $_POST['descricao08'];
		$descricao09 = $_POST['descricao09'];
		$descricao10 = $_POST['descricao10'];

        $insereDados = mysql_query("INSERT INTO cadescricao (descricao01 , descricao02 , descricao03, descricao04, descricao05, descricao06, descricao07, descricao08, descricao09, descricao10) VALUES ('$descricao01', '$descricao02', '$descricao03', '$descricao04', '$descricao05', '$descricao06', '$descricao07', '$descricao08', '$descricao09', '$descricao10')");   
			echo "<script> alert('Suas informações foram enviadas com sucesso! Agradecemos por sua atenção.'); window.location='cadpaginas.php'</script>";	
?>