<?php
include('conexaoBD.php');

        $link01 = $_POST['link01'];
        $link02 = $_POST['link02'];
		$link03 = $_POST['link03'];
		$link04 = $_POST['link04'];
        $link05 = $_POST['link05'];
		$link06 = $_POST['link06'];
		$link07 = $_POST['link07'];
        $link08 = $_POST['link08'];
		$link09 = $_POST['link09'];
		$link10 = $_POST['link10'];

        $insereDados = mysql_query("INSERT INTO cadlinks (link01 , link02 , link03, link04, link05, link06, link07, link08, link09, link10) VALUES ('$link01', '$link02', '$link03', '$link04', '$link05', '$link06', '$link07', '$link08', '$link09', '$link10')");   
			echo "<script> alert('Suas informações foram enviadas com sucesso! Agradecemos por sua atenção.'); window.location='cadpaginas.php'</script>";	
?>