<?php 
	session_start();
	
	unset($_SESSION[id]);
	unset($_SESSION[user]);
	unset($_SESSION[nomeUser]);

	session_destroy();
	echo "<script> window.location='admin.php'</script>";
?>