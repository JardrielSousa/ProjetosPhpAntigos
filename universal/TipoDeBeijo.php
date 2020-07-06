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
                        <h1> Qual é o Seu Tipo De Beijo? </h1>
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
							<p class="lead"><h5> Por favor, não deixe de marcar sua visita em nosso site. </h5></p><div class="fb-like" data-href="http://universal/index.php"
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
echo 'Questão 01. Item: ' . $q01 . ') 30 Pontos' . '<br>';
$q01 = 30;
}else if( $q01 == 'b' ){
echo 'Questão 01. Item: ' . $q01 . ') 0 Pontos' . '<br>';
$q01 = 0;
}else if( $q01 == 'c' ){
echo 'Questão 01. Item: ' . $q01 . ') 10 Pontos' . '<br>';
$q01 = 10;
}else if( $q01 == 'd' ){
echo 'Questão 01. Item: ' . $q01 . ') 20 Pontos' . '<br>';
$q01 = 20;
}

//	QUESTAO 02.
@$q02 = $_POST['q02'];
if( $q02 == 'a' ){
echo 'Questão 02. Item: ' . $q02 . ') 30 Pontos' . '<br>';
$q02 = 30;
}else if( $q02 == 'b' ){
echo 'Questão 02. Item: ' . $q02 . ') 10 Pontos' . '<br>';
$q02 = 10;
}else if( $q02 == 'c' ){
echo 'Questão 02. Item: ' . $q02 . ') 0 Pontos' . '<br>';
$q02 = 0;
}else if( $q02 == 'd' ){
echo 'Questão 02. Item: ' . $q02 . ') 20 Pontos' . '<br>';
$q02 = 20;
}

//	QUESTAO 03.
@$q03 = $_POST['q03'];
if( $q03 == 'a' ){
echo 'Questão 03. Item: ' . $q03 . ') 0 Pontos' . '<br>';
$q03 = 0;
}else if( $q03 == 'b' ){
echo 'Questão 03. Item: ' . $q03 . ') 20 Pontos' . '<br>';
$q03 = 20;
}else if( $q03 == 'c' ){
echo 'Questão 03. Item: ' . $q03 . ') 30 Pontos' . '<br>';
$q03 = 30;
}else if( $q03 == 'd' ){
echo 'Questão 03. Item: ' . $q03 . ') 10 Pontos' . '<br>';
$q03 = 10;
}

//	QUESTAO 04.
@$q04 = $_POST['q04'];
if( $q04 == 'a' ){
echo 'Questão 04. Item: ' . $q04 . ') 10 Pontos' . '<br>';
$q04 = 10;
}else if( $q04 == 'b' ){
echo 'Questão 04. Item: ' . $q04 . ') 20 Pontos' . '<br>';
$q04 = 20;
}else if( $q04 == 'c' ){
echo 'Questão 04. Item: ' . $q04 . ') 30 Pontos' . '<br>';
$q04 = 30;
}else if( $q04 == 'd' ){
echo 'Questão 04. Item: ' . $q04 . ') 0 Pontos' . '<br>';
$q04 = 0;
}

//	QUESTAO 05.
@$q05 = $_POST['q05'];
if( $q05 == 'a' ){
echo 'Questão 05. Item: ' . $q05 . ') 40 Pontos' . '<br>';
$q05 = 40;
}else if( $q05 == 'b' ){
echo 'Questão 05. Item: ' . $q05 . ') 20 Pontos' . '<br>';
$q05 = 20;
}else if( $q05 == 'c' ){
echo 'Questão 05. Item: ' . $q05 . ') 10 Pontos' . '<br>';
$q05 = 10;
}else if( $q05 == 'd' ){
echo 'Questão 05. Item: ' . $q05 . ') 30 Pontos' . '<br>';
$q05 = 30;
}

//	QUESTAO 06.
@$q06 = $_POST['q06'];
if( $q06 == 'a' ){
echo 'Questão 06. Item: ' . $q06 . ') 10 Pontos' . '<br>';
$q06 = 10;
}else if( $q06 == 'b' ){
echo 'Questão 06. Item: ' . $q06 . ') 30 Pontos' . '<br>';
$q06 = 30;
}else if( $q06 == 'c' ){
echo 'Questão 06. Item: ' . $q06 . ') 20 Pontos' . '<br>';
$q06 = 20;
}else if( $q06 == 'd' ){
echo 'Questão 06. Item: ' . $q06 . ') 0 Pontos' . '<br>';
$q06 = 0;
}

//	QUESTAO 07.
@$q07 = $_POST['q07'];
if( $q07 == 'a' ){
echo 'Questão 07. Item: ' . $q07 . ') 20 Pontos' . '<br>';
$q07 = 20;
}else if( $q07 == 'b' ){
echo 'Questão 07. Item: ' . $q07 . ') 30 Pontos' . '<br>';
$q07 = 30;
}else if( $q07 == 'c' ){
echo 'Questão 07. Item: ' . $q07 . ') 0 Pontos' . '<br>';
$q07 = 0;
}else if( $q07 == 'd' ){
echo 'Questão 07. Item: ' . $q07 . ') 10 Pontos' . '<br>';
$q07 = 10;
}

//	QUESTAO 08.
@$q08 = $_POST['q08'];
if( $q08 == 'a' ){
echo 'Questão 08. Item: ' . $q08 . ') 30 Pontos' . '<br>';
$q08 = 30;
}else if( $q08 == 'b' ){
echo 'Questão 08. Item: ' . $q08 . ') 20 Pontos' . '<br>';
$q08 = 20;
}else if( $q08 == 'c' ){
echo 'Questão 08. Item: ' . $q08 . ') 10 Pontos' . '<br>';
$q08 = 10;
}else if( $q08 == 'd' ){
echo 'Questão 08. Item: ' . $q08 . ') 0 Pontos' . '<br>';
$q08 = 0;
}

//	QUESTAO 09.
@$q09 = $_POST['q09'];
if( $q09 == 'a' ){
echo 'Questão 09. Item: ' . $q09 . ') 20 Pontos' . '<br>';
$q09 = 20;
}else if( $q09 == 'b' ){
echo 'Questão 09. Item: ' . $q09 . ') 0 Pontos' . '<br>';
$q09 = 0;
}else if( $q09 == 'c' ){
echo 'Questão 09. Item: ' . $q09 . ') 30 Pontos' . '<br>';
$q09 = 30;
}else if( $q09 == 'd' ){
echo 'Questão 09. Item: ' . $q09 . ') 10 Pontos' . '<br>';
$q09 = 10;
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
echo 'Questão 10. Item: ' . $q10 . ') 0 Pontos' . '<br>';
$q10 = 0;
}

//	SOMATORIO.
$soma = $q01 + $q02 + $q03 + $q04 + $q05 + $q06 + $q07 + $q08 + $q09 + $q10;
echo 'Total: ' . $soma . ' Pontos' . '<br><br>';

//	EXIBICAO DO RESULTADO FINAL.
if( $soma >= 10 && $soma <= 60 ){
echo '<p><strong>  SEM ESTILO! </p> <p> Você pode ser muito jovem, não saber como beijar, ou não quer beijar niguém. Você apenas não foi feito(a) para beijar. Você deveria mandar beijos virtuais e praticar nas suas mãos. Essa é a melhor coisa que poderia fazer agora! </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 70 && $soma <= 140 ){
echo '<p><strong> ESTILO BICADA (SELINHO) </p> <p> Um selinho normal é bom o bastante pra você nesse momento. Em alguns moentos, o selinho é um dos melhores tipos de beijo. Nada de mais, nada de menos. Rápido ou selinho longo, esse tipo de beijo é bem vindo em qualquer lugar do corpo lábios, bochechas ou pescoço. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 150 && $soma <= 220 ){
echo '<p><strong> ESTILO LABIAL </p> <p> Um beijo de boca aberta sem língua é o seu estilo. Pode ser bem apaixonado e lento, arriscado e rápido, ou algo intermediário. Você pode tentar mordidas no lábios, e tornar os beijos mais "selvagens" se você quiser assim. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 230 && $soma <= 300 ){
echo '<p><strong> ESTILO LÍNGUA </p> <p> Esse tipo de beijo é sensual e romântico. Ele pode durar segundos, minutos, ou até horas. Você que decide. Evite o mal hálito, e não use sua língua como se fosse uma cobra. Comece devagar e com beijinho, e deixe a paixão crescer e tomar conta. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}
?>
                        <section>
                            <div id="text-page">
                                <p class="lead">
								Todos nós ou grande parte dos jovens tem a curiosidade de saber se beija bem ou não, então tire sua curiosidade sabendo qual seu tipo de beijo, esse pequeno questionário poderá ajudá-lo nessa dúvida. <a href="index.php" class="external"> Voltar a página inicial </a>.</p>
								<form action="TipoDeBeijo.php" method="POST">
                                <h4> 01. Você está com vontade de beijar agora? </h4><strong>
                                <!--<p><strong>Pellentesque habitant morbi tristique</strong>-->
								<p> a) <input type="radio" name="q01" value="a" /> Sim </p>
								<p> b) <input type="radio" name="q01" value="b" /> Acho nojento </p>
								<p> c) <input type="radio" name="q01" value="c" /> Não </p>
								<p> d) <input type="radio" name="q01" value="d" /> Prefiro dizer nada </p></strong>

								<br><h4> 02. Você já beijou alguém? </h4><strong>
								<p> a) <input type="radio" name="q02" value="a" /> Não </p>
								<p> b) <input type="radio" name="q02" value="b" /> Sim </p>
								<p> c) <input type="radio" name="q02" value="c" /> Sim, pelo resto da minha vida </p>
								<p> d) <input type="radio" name="q02" value="d" /> Não quero responder </p></strong>

								<br><h4> 03. Que estilo de músical você prefere? </a></h4><strong>
								<p> a) <input type="radio" name="q03" value="a" /> Tristes </p>
								<p> b) <input type="radio" name="q03" value="b" /> Engraçadas </p>
								<p> c) <input type="radio" name="q03" value="c" /> Românticas </p>
								<p> d) <input type="radio" name="q03" value="d" /> Pacíficas </p></strong>

								<br><h4> 04. Qual é o aspecto mais importante de um grande beijo? </h4><strong>
								<p> a) <input type="radio" name="q04" value="a" /> Clima do momento </p>
								<p> b) <input type="radio" name="q04" value="b" /> Atitude </p>
								<p> c) <input type="radio" name="q04" value="c" /> Técnica </p>
								<p> d) <input type="radio" name="q04" value="d" /> Não quero responder </p></strong>

								<br><h4> 05. O que você espera de um relacionamento?  </h4><strong>
								<p> a) <input type="radio" name="q05" value="a" /> Nada </p>
								<p> b) <input type="radio" name="q05" value="b" /> Sexo </p>
								<p> c) <input type="radio" name="q05" value="c" /> Abraços </p>
								<p> d) <input type="radio" name="q05" value="d" /> Beijos </p></strong>

								<br><h4> 06. Como você aprendeu a beijar? </h4><strong>
								<p> a) <input type="radio" name="q06" value="a" /> Beijando o travesseiro </p>
								<p> b) <input type="radio" name="q06" value="b" /> Aconteceu, enquanto beijava alguém </p>
								<p> c) <input type="radio" name="q06" value="c" /> Assitindo vídeos </p>
								<p> d) <input type="radio" name="q06" value="d" /> Ainda não "aprendi" </p></strong>

								<br><h4> 07. Você gosta de beijar em público? </h4><strong>
								<p> a) <input type="radio" name="q07" value="a" /> Sim, eu acho maneiro </p>
								<p> b) <input type="radio" name="q07" value="b" /> É demais quando o momento é perfeito </p>
								<p> c) <input type="radio" name="q07" value="c" /> Não </p>
								<p> d) <input type="radio" name="q07" value="d" /> Eu prefiro algo mais íntimo </p></strong>

								<br><h4> 08. Você saiu em um encontro e a pesssoa resolve lhe beijar. O que você faria? </h4><strong>
								<p> a) <input type="radio" name="q08" value="a" /> Olha bem nos olhos e mostra que tá afim </p>
								<p> b) <input type="radio" name="q08" value="b" /> Beijo ele(a) </p>
								<p> c) <input type="radio" name="q08" value="c" /> Deixo ele(a) e saiu do local </p>
								<p> d) <input type="radio" name="q08" value="d" /> Evito o beijo, pois tenho vergonha </p></strong>

								<br><h4> 09. Onde você gostaria de beijar? </h4><strong>
								<p> a) <input type="radio" name="q09" value="a" /> Sofá, cama e/ou cinema </p>
								<p> b) <input type="radio" name="q09" value="b" /> Em nenhum lugar </p>
								<p> c) <input type="radio" name="q09" value="c" /> À luz da lua </p>
								<p> d) <input type="radio" name="q09" value="d" /> Em um lugar privado apenas eu e ele(a) </p></strong>

								<br><h4> 10. Como você descreve um beijo perfeito? </h4><strong>
								<p> a) <input type="radio" name="q10" value="a" /> Qualquer tipo de ação já seria boa </p>
								<p> b) <input type="radio" name="q10" value="b" /> Beijo profundo, romântico, com alguém especial </p>
								<p> c) <input type="radio" name="q10" value="c" /> Sexy e brincalhão, talvez espontâneo </p>
								<p> d) <input type="radio" name="q10" value="d" /> Nenhuma </p></strong><p>
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