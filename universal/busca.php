<li class="dropdown use-yamm yamm-fw">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Busca <b class="caret"></b></a>
	<ul class="dropdown-menu">
	<li>
		<div class="yamm-content">
		<div class="row">
		<div class="col-sm-6">
			<form action="index.php" method="POST" name="form_busca">
				<input type="text" name="busca" placeholder="Busca" />
				<input type="submit" name="botao" value="Buscar" />
			</form>
		</div>
<?php
				if(isset($_POST['botao'])){
				$busca = $_POST['busca'];
				
				if($busca == "" or $busca == " "){
					echo '<center><strong> Digite algo para busca! </strong></center>';
				}else{
				$busca_divida = explode(' ',$busca);
				$quant = count($busca_divida);
				$id_mostrado = array("");
				
				for( $i = 0; $i < $quant; $i++ ){
				$pesquisa = $busca_divida[$i];

				$sql = mysql_query("SELECT * FROM busca WHERE titulo LIKE '%$pesquisa%'");
				$quant_campos = mysql_num_rows($sql);
				if($quant_campos == 0){
					echo '<center><strong> Nunhum rerultado obtido! </strong></center>';
				}else{
				while($linha = mysql_fetch_array($sql)){
					$id = $linha['id'];
					
					$titulo = $linha['titulo'];
					$conteudo = $linha['conteudo'];
					
					if(!array_search($id, $id_mostrado)){
					echo "<div class='col-sm-3'>
                    <ul>
                    <li><h5>".$titulo."</h5></li>
					<li>".$conteudo."</li>
					</div>";
					array_push($id_mostrado, $id);
					}
				}
			}	//	else
		}	//	for
	}	//	else campo vazio
}	//	if botao pressionado
?>
             </ul>
             </li>