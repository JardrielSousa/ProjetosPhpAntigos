<?php
include('menu.php');
include('conexaoBD.php');

		if(isset($_POST['acao']) && $_POST['acao'] == 'enviado'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
		$mensagem = $_POST['mensagem'];

		if(empty($nome) || empty($email) || empty($mensagem)){
			echo "<script> alert('Preencha todos os campos!'); window.location='contato.php'</script>";
		}else{
        $insereDados = mysql_query("INSERT INTO contato (nome , email , mensagem) VALUES ('$nome', '$email', '$mensagem')");   
			echo "<script> alert('Suas informações foram enviadas com sucesso! Agradecemos por sua atenção.'); window.location='index.php'</script>";
		}
	}
?>
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1> Contato </h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container" id="contact">
                <section>
                    <div class="row">
                        <div class="col-md-12">
                            <section>
                                <div class="heading">
                                    <h2> Entre em contato conosco </h2>
                                </div>
                                <p class="lead"> Tire dúvidas a respeito de nosso site, faça pedidos e sujestões sobre novos assuntos.
								<font color="red"> * </font> Siginifica campos obrigatórios. </p>
                            </section>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2> Formulário </h2>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <form action="contato.php" method="POST">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname"> Nome </label><font color="red"> * </font>
                                            <input type="text" class="form-control" id="firstname" name="nome" placeholder="Nome" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email"> E-mail </label><font color="red"> * </font>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="mensage"> Menssagem </label><font color="red"> * </font>
                                            <textarea class="form-control" id="mensage" name="mensagem" placeholder="Mensagem"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
										<input type="hidden" name="acao" value="enviado" />
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Enviar </button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </section>
            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->
        <!-- *** GET IT *** -->
        <div id="get-it">
        </div>

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left"> &copy; 2017. QUIZ & TESTES / Sempre Sendo você </p>
                    <p class="pull-right"> Link <a href="" title="Site"> QUIZ & TESTES </a>  | Email: <a href="" title="Email"> quizetestes@gmail.com </a></p>
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
    <!-- gmaps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/gmaps.init.js"></script>
    <!-- gmaps end -->
</body>
</html>