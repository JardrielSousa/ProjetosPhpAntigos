<?php 
	include_once("cadastrando.php");
	$nome = $_REQUEST['nome'];
	$telefone = $_REQUEST['telefone'];
	$endereco = $_REQUEST['endereco'];
	$email = $_REQUEST['email'];
	$senha = $_REQUEST['senha'];
	$confsenha = $_REQUEST['confsenha'];

	$link = "INSERT INTO clientes(nome,endereco,telefone,email,senha,confsenha)VALUES('$nome','$endereco','$telefone','$email','$senha','$confsenha')";
	$resul = mysqli_query($sql,$link);
	echo "<h1>Cadastrado com sucesso!!!</h1><br>";
	$resul_cliente = "SELECT * FROM clientes";
	$resul_tabela = mysqli_query($sql,$resul_cliente);

	//$id = mysqli_real_escape_string($sql,$_REQUEST['id']);
    		$nome = mysqli_real_escape_string($sql,$_REQUEST['nome']);
    		$endereco = mysqli_real_escape_string($sql,$_REQUEST['endereco']);
    		$telefone = mysqli_real_escape_string($sql,$_REQUEST['telefone']);
    		$email = mysqli_real_escape_string($sql,$_REQUEST['email']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Finalizando Cadastro...</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/cadastro.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
		$('#exampleModal').on('show.bs.modal', function (event) {
  	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('whatever') // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('New message to ' + recipient)
	  modal.find('.modal-body input').val(recipient)
	})
	</script>
	
</head>
<body>
	<a href="index.html">Voltar para Home</a>
	
	<div class="panel panel-default text-center">
  <!-- Default panel contents -->
  <div class="panel-heading ">Listas dos Cadastrados</div>
    <!-- Table -->
  <table class="table page-header">
    <thead>
		<tr>
			<th>id</th>
			<th>Nome</th>
			
		</tr>
    </thead>

    	<tbody>
    	</tbody>
    	<?php 
    		include_once("cadastrando.php");
    		    	while($row_cursos = mysqli_fetch_assoc($resul_tabela)){ ?>
			<tr>
			    			<td><?php echo $row_cursos['id'];?>
			    			</td>
			    			<td><?php echo $row_cursos['nome'];?></td>
			    			
			    			<td>
			    				
			    				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row_cursos['id'];?>" data-whatever="<?php echo $row_cursos['id'];?>">Visualizar</button>

			    				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">Editar</button>

			    				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">Apagar</button>


			    				
			    			</td>

			  </tr>    
		<div class="modal fade" id="myModal<?php echo $row_cursos['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:black;"><?php echo $row_cursos['nome']?></h4>
        <div class="modal-body">
        	<p><strong>Nome:</strong><?php echo $row_cursos['nome'];?></p></h2>
        	<p><strong>Email:</strong><?php echo $row_cursos['email'];?></p>
        	<p><strong>Endereço:</strong><?php echo $row_cursos['endereco'];?></p>
        	<p><strong>Telefone:</strong><?php echo $row_cursos['telefone'];?></p>
        	
        </div>
      </div> 
    </div>
  </div>

</div>


		<?php } ?>
    	</tbody>
    
  </table>
</div>



</body>
</html>