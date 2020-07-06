<?php
	$servidor = 'localhost';
	$banco = 'quizeteste';
	$usuario = 'root';
	$senha = 'vertrigo';

	@$link = mysql_connect($servidor, $usuario, $senha);
	@$db = mysql_select_db($banco,$link);
	if(!$link){
		echo "Erro ao conectar o banco de dados!";
		exit();
}
		//	mysql_connect('localhost', 'root', '');
		//	mysql_select_db('quiz');
?>