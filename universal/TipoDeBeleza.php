<script>
function myFunction() {
    alert("Verifique seu resultado logo a cima.");
}
</script>

        <?php include('menu.php');

        echo '<div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1> Que Tipo De Beleza Você Irradia? </h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">';
					    // *** LEFT COLUMN ***
                        // *** PAGES MENU ***
                        
						include('conexaoBD.php');
						$ListarLinks = mysql_query('SELECT * FROM cadlinks');
						while($escrever=mysql_fetch_array($ListarLinks)){

						echo '<div class="panel panel-default sidebar-menu">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Páginas em Destaque </h3>
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li> ' . $escrever['link01'] . ' </li>
                                    <li> ' . $escrever['link02'] . ' </li>
                                    <li> ' . $escrever['link03'] . ' </li>
									<li> ' . $escrever['link04'] . ' </li>
                                    <li> ' . $escrever['link05'] . ' </li>
                                    <li> ' . $escrever['link06'] . ' </li>
									<li> ' . $escrever['link07'] . ' </li>
                                    <li> ' . $escrever['link08'] . ' </li>
                                    <li> ' . $escrever['link09'] . ' </li>
									<li> ' . $escrever['link10'] . '</li>
                                </ul>
                            </div>
                        </div>';}

                        // *** PAGES MENU END ***
                        echo '<div class="banner">
                            <a href="shop-category.html"><img src="img/banner.jpg" alt="sales 2014" class="img-responsive"></a>
                        </div>
							<p class="lead"><h5> Por favor não deixe de marcar sua visita em nosso site. </h5></p><div class="fb-like" data-href="http://universal/index.php"
							data-width="100" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true">
							</div>' .
                         //	.banner
                    '</div>' .
                    //	.col-md-3
                    //	*** LEFT COLUMN END ***
                    //	*** RIGHT COLUMN ***
                    '<div class="col-md-9 clearfix">					

<hr><h4><strong>Resultado:</strong></h4>';
//	QUESTAO 01.
@$q01 = $_POST['q01'];
if( $q01 == 'a' ){
echo 'Questão 01. Item: ' . $q01 . ') 10 Pontos' . '<br>';
$q01 = 10;
}else if( $q01 == 'b' ){
echo 'Questão 01. Item: ' . $q01 . ') 20 Pontos' . '<br>';
$q01 = 20;
}else if( $q01 == 'c' ){
echo 'Questão 01. Item: ' . $q01 . ') 30 Pontos' . '<br>';
$q01 = 30;
}else if( $q01 == 'd' ){
echo 'Questão 01. Item: ' . $q01 . ') 40 Pontos' . '<br>';
$q01 = 40;
}

//	QUESTAO 02.
@$q02 = $_POST['q02'];
if( $q02 == 'a' ){
echo 'Questão 02. Item: ' . $q02 . ') 20 Pontos' . '<br>';
$q02 = 20;
}else if( $q02 == 'b' ){
echo 'Questão 02. Item: ' . $q02 . ') 40 Pontos' . '<br>';
$q02 = 40;
}else if( $q02 == 'c' ){
echo 'Questão 02. Item: ' . $q02 . ') 30 Pontos' . '<br>';
$q02 = 30;
}else if( $q02 == 'd' ){
echo 'Questão 02. Item: ' . $q02 . ') 10 Pontos' . '<br>';
$q02 = 10;
}

//	QUESTAO 03.
@$q03 = $_POST['q03'];
if( $q03 == 'a' ){
echo 'Questão 03. Item: ' . $q03 . ') 30 Pontos' . '<br>';
$q03 = 30;
}else if( $q03 == 'b' ){
echo 'Questão 03. Item: ' . $q03 . ') 20 Pontos' . '<br>';
$q03 = 20;
}else if( $q03 == 'c' ){
echo 'Questão 03. Item: ' . $q03 . ') 40 Pontos' . '<br>';
$q03 = 40;
}else if( $q03 == 'd' ){
echo 'Questão 03. Item: ' . $q03 . ') 10 Pontos' . '<br>';
$q03 = 10;
}

//	QUESTAO 04.
@$q04 = $_POST['q04'];
if( $q04 == 'a' ){
echo 'Questão 04. Item: ' . $q04 . ') 40 Pontos' . '<br>';
$q04 = 40;
}else if( $q04 == 'b' ){
echo 'Questão 04. Item: ' . $q04 . ') 20 Pontos' . '<br>';
$q04 = 20;
}else if( $q04 == 'c' ){
echo 'Questão 04. Item: ' . $q04 . ') 30 Pontos' . '<br>';
$q04 = 30;
}else if( $q04 == 'd' ){
echo 'Questão 04. Item: ' . $q04 . ') 10 Pontos' . '<br>';
$q04 = 10;
}

//	QUESTAO 05.
@$q05 = $_POST['q05'];
if( $q05 == 'a' ){
echo 'Questão 05. Item: ' . $q05 . ') 20 Pontos' . '<br>';
$q05 = 20;
}else if( $q05 == 'b' ){
echo 'Questão 05. Item: ' . $q05 . ') 10 Pontos' . '<br>';
$q05 = 10;
}else if( $q05 == 'c' ){
echo 'Questão 05. Item: ' . $q05 . ') 30 Pontos' . '<br>';
$q05 = 30;
}else if( $q05 == 'd' ){
echo 'Questão 05. Item: ' . $q05 . ') 40 Pontos' . '<br>';
$q05 = 40;
}

//	QUESTAO 06.
@$q06 = $_POST['q06'];
if( $q06 == 'a' ){
echo 'Questão 06. Item: ' . $q06 . ') 20 Pontos' . '<br>';
$q06 = 20;
}else if( $q06 == 'b' ){
echo 'Questão 06. Item: ' . $q06 . ') 30 Pontos' . '<br>';
$q06 = 30;
}else if( $q06 == 'c' ){
echo 'Questão 06. Item: ' . $q06 . ') 10 Pontos' . '<br>';
$q06 = 10;
}else if( $q06 == 'd' ){
echo 'Questão 06. Item: ' . $q06 . ') 40 Pontos' . '<br>';
$q06 = 40;
}

//	QUESTAO 07.
@$q07 = $_POST['q07'];
if( $q07 == 'a' ){
echo 'Questão 07. Item: ' . $q07 . ') 40 Pontos' . '<br>';
$q07 = 40;
}else if( $q07 == 'b' ){
echo 'Questão 07. Item: ' . $q07 . ') 20 Pontos' . '<br>';
$q07 = 20;
}else if( $q07 == 'c' ){
echo 'Questão 07. Item: ' . $q07 . ') 30 Pontos' . '<br>';
$q07 = 30;
}else if( $q07 == 'd' ){
echo 'Questão 07. Item: ' . $q07 . ') 10 Pontos' . '<br>';
$q07 = 10;
}

//	QUESTAO 08.
@$q08 = $_POST['q08'];
if( $q08 == 'a' ){
echo 'Questão 08. Item: ' . $q08 . ') 20 Pontos' . '<br>';
$q08 = 20;
}else if( $q08 == 'b' ){
echo 'Questão 08. Item: ' . $q08 . ') 30 Pontos' . '<br>';
$q08 = 30;
}else if( $q08 == 'c' ){
echo 'Questão 08. Item: ' . $q08 . ') 10 Pontos' . '<br>';
$q08 = 10;
}else if( $q08 == 'd' ){
echo 'Questão 08. Item: ' . $q08 . ') 40 Pontos' . '<br>';
$q08 = 40;
}

//	QUESTAO 09.
@$q09 = $_POST['q09'];
if( $q09 == 'a' ){
echo 'Questão 09. Item: ' . $q09 . ') 40 Pontos' . '<br>';
$q09 = 40;
}else if( $q09 == 'b' ){
echo 'Questão 09. Item: ' . $q09 . ') 10 Pontos' . '<br>';
$q09 = 10;
}else if( $q09 == 'c' ){
echo 'Questão 09. Item: ' . $q09 . ') 20 Pontos' . '<br>';
$q09 = 20;
}else if( $q09 == 'd' ){
echo 'Questão 09. Item: ' . $q09 . ') 30 Pontos' . '<br>';
$q09 = 30;
}

//	QUESTAO 10.
@$q10 = $_POST['q10'];
if( $q10 == 'a' ){
echo 'Questão 10. Item: ' . $q10 . ') 10 Pontos' . '<br>';
$q10 = 10;
}else if( $q10 == 'b' ){
echo 'Questão 10. Item: ' . $q10 . ') 30 Pontos' . '<br>';
$q10 = 30;
}else if( $q10 == 'c' ){
echo 'Questão 10. Item: ' . $q10 . ') 20 Pontos' . '<br>';
$q10 = 20;
}else if( $q10 == 'd' ){
echo 'Questão 10. Item: ' . $q10 . ') 40 Pontos' . '<br>';
$q10 = 40;
}

//	SOMATORIO.
$soma = $q01 + $q02 + $q03 + $q04 + $q05 + $q06 + $q07 + $q08 + $q09 + $q10;
echo 'Total: ' . $soma . ' Pontos' . '<br><br>';

//	EXIBICAO DO RESULTADO FINAL.
if( $soma >= 100 && $soma <= 160 ){
echo '<p><strong>  LIVRE </p> <p> Sua Alma irradia um espelho livre, e a beleza que você possui contagia a todos ao seu redor. Quando você entrar em
algum ambiente, você realmente abrilhanta o lugar e acaba atrindo as pessoas à você. Você ama e aceita a todos como indivíduos únicos e essa
é a sua beleza verdadeira. Você olha além do superficial e consegue visualizar suas almas. Com seu coração e natureza bem abertos, sua beleza
natural é transparente, e isso sempre te guia! </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 170 && $soma <= 250 ){
echo '<p><strong> BELEZA CLÁSSICA </p> <p> Você possui uma beleza clássica. Você gosta das coisas mais finas da vida e não consegue se conter, mas se senitr
atraído(a) para as coisas esteticamente belas. Você é uma alma um tanto clássica e estilosa que confia nos seus instintos. O que significa que
você sabe em quem pode confiar e em quem não pode. Você é belo(a), puro(a) e sabe como conseguir o que quer usando sua sagacidade e inteligência. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 260 && $soma <= 330 ){
echo '<p><strong> BELEZA ESPONTÂNEA </p> <p> Você irradia vida e espontaneidade. Você é cheio(a) de aventuras e irradia esse espírito. Você está indo na vida,
e isso que te faz ser alguém tão belo(a). As pessoas te acham incrivelmente carismático(a) e ama a essência da sua vida. Elas costumam se sentir
tocadas por sua presença. Não é raro você conhecer alguém, fazer a diferença na vida dela e seguir a viagem irradiando sua beleza onde quer que esteja. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 340 && $soma <= 400 ){
echo '<p><strong> BELEZA ENERGÉTICA </p> <p> Você tem uma alma energética que é cheia de vida e amor. Você não conseguiria possuir mais fogo intetior se quissesse, e
você tem uma grande habilidade de conquistar todos os seus sonhos. Você irradia energia e todo mundo ao seu redor consegue sentir quando você por perto.
A festa sempre está morta sem você e a beleza que você traz o poder de transformar o mundo. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}
?>
                        <section>
                            <div id="text-page">
                                <p class="lead">
								Todos nós somos belos, não existe essa de ser feio ou bonito, mais sim se você tem auto ou baixaestima. A beleza não se trata de ser belo ou não aos olhos humanos, e sim pelo fato de ter caráter, ser gentil com o próximo. <a href="index.php" class="external"> Voltar a página inicial </a>.</p>
								<form action="TipoDeBeleza.php" method="POST">
                                <h4> 01. Qual parte do seu corpo você considera mais bonita? </h4><strong>
                                <!--<p><strong>Pellentesque habitant morbi tristique</strong>-->
								<p> a) <input type="radio" name="q01" value="a" /> Braços </p>
								<p> b) <input type="radio" name="q01" value="b" /> Rosto </p>
								<p> c) <input type="radio" name="q01" value="c" /> Corpo </p>
								<p> d) <input type="radio" name="q01" value="d" /> Pernas </p></strong>

								<br><h4> 02. Como as pessoas te descrevem quando te veem? </h4><strong>
								<p> a) <input type="radio" name="q02" value="a" /> Você é alguém que consegue o que quer </p>
								<p> b) <input type="radio" name="q02" value="b" /> Você é a vida e alma do lugar </p>
								<p> c) <input type="radio" name="q02" value="c" /> Você traz tempero e sabor à vida </p>
								<p> d) <input type="radio" name="q02" value="d" /> Você ilumina o ambiente </p></strong>

								<br><h4> 03. O que te manteve firme nos momentos de <a href="https://www.google.com.br/search?q=o+que+%C3%A9+adversidade&oq=o+que+%C3%A9+adversidade&aqs=chrome..69i57j0l5.3992j0j7&sourceid=chrome&ie=UTF-8" title="Clique e veja o que é adversidade"> adversidade? </a></h4><strong>
								<p> a) <input type="radio" name="q03" value="a" /> Conseguir ver o melhor em todas as situações </p>
								<p> b) <input type="radio" name="q03" value="b" /> Ser firme aos meus princípios e intuição </p>
								<p> c) <input type="radio" name="q03" value="c" /> Minha positividade e luz </p>
								<p> d) <input type="radio" name="q03" value="d" /> Minha habilidade de perdoar e deixar pra lá </p></strong>

								<br><h4> 04. Pra você, qual dos elementos é mais iluminado? </h4><strong>
								<p> a) <input type="radio" name="q04" value="a" /> Água </p>
								<p> b) <input type="radio" name="q04" value="b" /> Terra </p>
								<p> c) <input type="radio" name="q04" value="c" /> Fogo </p>
								<p> d) <input type="radio" name="q04" value="d" /> Ar </p></strong>

								<br><h4> 05. Qual cor você acha que irradia mais beleza?  </h4><strong>
								<p> a) <input type="radio" name="q05" value="a" /> Verde </p>
								<p> b) <input type="radio" name="q05" value="b" /> Azul </p>
								<p> c) <input type="radio" name="q05" value="c" /> Preto </p>
								<p> d) <input type="radio" name="q05" value="d" /> Amarelo </p></strong>

								<br><h4> 06. Define a beleza em apenas uma palava: </h4><strong>
								<p> a) <input type="radio" name="q06" value="a" /> Classe </p>
								<p> b) <input type="radio" name="q06" value="b" /> Espontaneidade </p>
								<p> c) <input type="radio" name="q06" value="c" /> Liberdade </p>
								<p> d) <input type="radio" name="q06" value="d" /> Energia </p></strong>

								<br><h4> 07. Quando você está atraído(a) por alguém, o que te chama mais atenção? </h4><strong>
								<p> a) <input type="radio" name="q07" value="a" /> Os olhos </p>
								<p> b) <input type="radio" name="q07" value="b" /> A risada </p>
								<p> c) <input type="radio" name="q07" value="c" /> As pernas </p>
								<p> d) <input type="radio" name="q07" value="d" /> Nada </p></strong>

								<br><h4> 08. Beleza é: </h4><strong>
								<p> a) <input type="radio" name="q08" value="a" /> Profundidade no olhar </p>
								<p> b) <input type="radio" name="q08" value="b" /> Profundidade do toque </p>
								<p> c) <input type="radio" name="q08" value="c" /> Profundidade do visual </p>
								<p> d) <input type="radio" name="q08" value="d" /> Profundidade da alma </p></strong>

								<br><h4> 09. Qual continente você gostaria mais de visitar? </h4><strong>
								<p> a) <input type="radio" name="q09" value="a" /> América (Central) </p>
								<p> b) <input type="radio" name="q09" value="b" /> Ásia </p>
								<p> c) <input type="radio" name="q09" value="c" /> Europa </p>
								<p> c) <input type="radio" name="q09" value="d" /> Oceania </p></strong>

								<br><h4> 10. Escolha uma frase: </h4><strong>
								<p> a) <input type="radio" name="q10" value="a" /> "O mundo pertence a quem tem energia!" </p>
								<p> b) <input type="radio" name="q10" value="b" /> "Planeje para ser espontâneo!" </p>
								<p> c) <input type="radio" name="q10" value="c" /> "Independente da situação, aja com classe!" </p>
								<p> d) <input type="radio" name="q10" value="d" /> "Liberdade é o oxigênio da alma!" </p></strong><p>
								<button type="submit" onclick="myFunction()" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> ENVIAR </button></p>
								</form>
                            </div>
                        </section>
                    </div>
                    <!-- /.col-md-9 -->
                    <!-- *** RIGHT COLUMN END *** -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
        <!-- *** GET IT *** -->

        <div id="get-it">
            <div class="container">
            </div>
        </div>       
        <!-- /#footer -->
        <!-- *** FOOTER END *** -->
        <!-- *** COPYRIGHT *** -->
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
</body>
</html>