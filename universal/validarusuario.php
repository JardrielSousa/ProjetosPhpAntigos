<?php
	include("conexaoBD.php");

	@$user = $_POST['email'];
	@$senha = $_POST['senha'];

	@$sel = mysql_query("select * from login where email='$user' and senha='$senha';") 
			or die("<meta charset=utf-8> <script>window.location='index.php' alert('Erro ao executar a instruçao SQL');</script>"); 

	@$linha = mysql_num_rows($sel);
	if($linha == 0){
		echo "<meta charset=utf-8> <script> window.location='index.php' alert('Usuario ou senha nao encontrado');</script>";
	}else{
		@$id_user= mysql_result($sel,0,"id");
		@$login_user= mysql_result($sel,0,"email");
		@$nome_user= mysql_result($sel,0,"nome");

		session_start();

		@$_SESSION[id] = $id_user;
		@$_SESSION[user] = $login_user;
		@$_SESSION[nomeUser] = $nome_user;
		echo "<script> window.location='admin.php'</script>";
	}
?>