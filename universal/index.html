<?php
	include('conexaoBD.php');
	include('menu.php');

		if(isset($_POST['acao']) && $_POST['acao'] == 'enviado'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

		if(empty($nome) || empty($email)){
			echo "<script> alert('Preencha todos os campos!'); window.location='index.php'</script>";
		}else{
        $insereDados = mysql_query("INSERT INTO notificacoes (nome , email) VALUES ('$nome', '$email')");   
			echo "<script> alert('Suas informações foram enviadas com sucesso! Agradecemos por sua atenção.'); window.location='index.php'</script>";
		}
	}

	$ListarDescricao = mysql_query('SELECT * FROM cadescricao');
	$ListarLinks = mysql_query('SELECT * FROM cadlinks');
	while($Escrever=mysql_fetch_array($ListarDescricao)){
	while($escrever=mysql_fetch_array($ListarLinks)){
		//*** HOMEPAGE CAROUSEL ***
         echo '<section>
            <div class="home-carousel">
                <div class="dark-mask"></div>
                <div class="container">
                    <div class="homepage owl-carousel">
						<div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <h1> Destaque </h1>
                                    <ul class="list-style-none">
                                        <li> ' . $Escrever['descricao01'] . ': ' . $escrever['link01'] . ' </li>
                                    </ul>
                                </div>
                                <div class="col-sm-7">
								<h1> Destaque </h1>
                                    <ul class="list-style-none">
                                        <li> ' . $Escrever['descricao02'] . ': ' . $escrever['link02'] . ' </li>
                                    </ul>
								</div>
                            </div>
                        </div>
						
						<div class="item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h1> Destaque </h1>
                                    <ul class="list-style-none">
                                        <li> ' . $Escrever['descricao03'] . ': ' . $escrever['link03'] . ' </li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
								<h1> Destaque </h1>
                                    <ul class="list-style-none">
										<li> ' . $Escrever['descricao04'] . ': ' . $escrever['link04'] . ' </li>
                                    </ul>
								</div>
                            </div>
                        </div>
						
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h1> Destaque </h1>
                                    <ul class="list-style-none">
                                        <li> ' . $Escrever['descricao05'] . ': ' . $escrever['link05'] . ' </li>
                                    </ul>
                                </div>
                                <div class="col-sm-7">
								<h1> Destaque </h1>
                                    <ul class="list-style-none">
                                        <li> ' . $Escrever['descricao06'] . ': ' . $escrever['link06'] . ' </li>
                                    </ul>
								</div>
                            </div>
                        </div>
						
						<div class="item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h1> Destaque </h1>
                                    <ul class="list-style-none">
                                        <li> ' . $Escrever['descricao07'] . ': ' . $escrever['link07'] . ' </li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
									<h1> Destaque </h1>
                                    <ul class="list-style-none">
										<li> ' . $Escrever['descricao08'] . ': ' . $escrever['link08'] . ' </li>
                                    </ul>
								</div>
                            </div>
                        </div>
						
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-7">
									<h1> Destaque </h1>
                                    <ul class="list-style-none">
									    <li> ' . $Escrever['descricao09'] . ': ' . $escrever['link09'] . ' </li>
                                    </ul>
								</div>
                                <div class="col-sm-5">
                                    <h1> Destaque </h1>
                                    <ul class="list-style-none">
                                        <li> ' . $Escrever['descricao10'] . ': ' . $escrever['link10'] . ' </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.project owl-slider -->
                </div>
            </div>
            <!-- *** HOMEPAGE CAROUSEL END *** -->
			';?>

			<center><p class="lead"><h5> Por favor não deixe de marcar sua visita em nosso site. </h5></p>
			<div class="fb-like" data-href="http://universal/menu.php" data-width="100" data-layout="button_count" data-action="recommend" data-size="large" data-show-faces="true" data-share="true"></div>
			<br><br>
			<form action="" method="POST" name="form_busca">
			<input type="text" name="busca" placeholder="Busca"/>
			<input type="submit" name="botao" value="Buscar" />
			</form></center>
			<?php
			include('conexaoBD.php');
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
					echo "<div class='resultado'>
					<h2>".$titulo."</h2>
					<p>".$conteudo."</p>
					</div>";
					array_push($id_mostrado, $id);
					}
				}
				}	//	else
				}	//	for
			}	//	else campo vazio
			}	//	if botao pressionado
			
			echo '
        </section>

        <section class="bar background-pentagon no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Páginas em Destaques</h2>
                        </div>

                        <p class="lead">Trabalhamos com muitos clientes, e para facilitar o acesso aos conteudos da página listamos um dos destaques de nosso site.
						O destaque são disponibilizados pelas páginas mais acessadas, ou seja, de maior gosto do publico.</p>
						<p class="lead">Os <a href=""> Destaques </a>Também podem ser vistos no <a href="">slide ao topo</a> e nas páginas de exibição do conteúdo</p>';

                        //*** TESTIMONIALS CAROUSEL ***
						//*** INICIANDO A LISTAGEM DAS PÁGINAS EM DESTAQUE *** 						

						echo '<ul class="owl-carousel testimonials same-height-row">
                            <li class="item">
                                    <div class="text">
                                        <p><th><center>' . $Escrever['descricao01'] . '</center></th></p><p><th><center>' . $escrever['link01'] . '</center></th></p>
                                    </div>
                            </li>
							
							<li class="item">
                                    <div class="text">
                                        <p><th><center>' . $Escrever['descricao02'] . '</center></th></p><p><th><center>' . $escrever['link02'] . '</center></th></p>
                                    </div>
                            </li>
							
							<li class="item">
                                    <div class="text">
                                        <p><th><center>' . $Escrever['descricao03'] . '</center></th><p></p><th><center>' . $escrever['link03'] . '</center></th></p>
                                    </div>
                            </li>
							
							<li class="item">
                                    <div class="text">
                                        <p><th><center>' . $Escrever['descricao04'] . '</center></th></p><p><th><center>' . $escrever['link04'] . '</center></th></p>
                                    </div>
                            </li>
                            
                           <li class="item">
                                    <div class="text">
                                        <p><th><center>' . $Escrever['descricao05'] . '</center></th><p></p><th><center>' . $escrever['link05'] . '</center></th></p>
                                    </div>
                            </li>
                            
							<li class="item">
                                    <div class="text">
                                        <p><th><center>' . $Escrever['descricao06'] . '</center></th><p></p><th><center>' . $escrever['link06'] . '</center></th></p>
                                    </div>
                            </li>
							
                            <li class="item">
                                    <div class="text">
                                        <p><th><center>' . $Escrever['descricao07'] . '</center></th><p></p><th><center>' . $escrever['link07'] . '</center></th></p>
                                    </div>
                            </li>
							
							<li class="item">
                                    <div class="text">
                                        <p><th><center>' . $Escrever['descricao08'] . '</center></th><p></p><th><center>' . $escrever['link08'] . '</center></th></p>
                                    </div>
                            </li>
							
							<li class="item">
                                    <div class="text">
                                        <p><th><center>' . $Escrever['descricao09'] . '</center></th></p><p><th><center>' . $escrever['link09'] . '</center></th></p>
                                    </div>
                            </li>
							
							<li class="item">
                                    <div class="text">
                                        <p><th><center>' . $Escrever['descricao10'] . '</center></th></p><p><th><center>' . $escrever['link10'] . '</center></th></p>
                                    </div>
                            </li>
                        </ul>';}}
                        //	owl-carousel
                        //	*** TESTIMONIALS CAROUSEL END ***
                    echo '</div>
                </div>
            </div>
        </section>'; ?>
        <!-- /.bar -->
        <!-- *** GET IT ***  -->
        <div id="get-it">
            <div class="container">
            </div>
        </div>
        <!-- /#footer -->
        <!-- *** FOOTER END *** -->
        <!-- *** COPYRIGHT ***  -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left"> &copy; 2017. QUIZ & TESTES / Sempre Sendo você </p>
                    <p class="pull-right"> Link <a href="index.php" title="Site"> QUIZ & TESTES </a>  | Email: <a href="" title="Email"> quizetestes@gmail.com </a></p>
                </div>
            </div>
        </div>
        <!-- /#copyright -->
        <!-- *** COPYRIGHT END *** -->
    </div>
    <!-- /#all -->
    <!-- #### JAVASCRIPT FILES ### -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
</body>
</html>