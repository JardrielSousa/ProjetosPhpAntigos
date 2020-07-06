<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Sistema de Cadastro</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/npm.js"></script>
    <!--Meus Arquivos-->
    
    <script type="text/javascript" src="js/escola.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
    </script>
      <body>
      	<div class="container-fluid">
      		<div class="row">
      		<div class="text-center">
      			
      		
      		<h1>Sistema de Cadastro</h1>
			<div class="form-group col-md-4 col-md-offset-4">
				<form action="processo.php" method="_POST" accept-charset="utf-8" class="form-signin">
					<input type="text" name="nome" id="idenome" placeholder="nome" class="form-control" />
					<input type="email" name="email" id="idemail" placeholder="Email" class="form-control" />
					<input type="password" name="senha" id="idsenha" placeholder="Senha" class="form-control" >
					<button class="btn btn-primary">Acessar</button> 
				</form>
			</div>
			<p class="text-danger">
			<?php 
				if (isset($_SESSION['Errorlogin'])) {
					echo $_SESSION['Errorlogin'];
					unset($_SESSION['Errorlogin']);
				}
			 ?>
        	</p>
        </div>

   		</div>
	</div>
 <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>