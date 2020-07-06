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
                        <h1> Qual Princesa da Disney você é? </h1>
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
$q01 = 50;
}else if( $q01 == 'c' ){
echo 'Questão 01. Item: ' . $q01 . ') 10 Pontos' . '<br>';
$q01 = 10;
}else if( $q01 == 'd' ){
echo 'Questão 01. Item: ' . $q01 . ') 40 Pontos' . '<br>';
$q01 = 40;
}else if( $q01 == 'e' ){
echo 'Questão 01. Item: ' . $q01 . ') 20 Pontos' . '<br>';
$q01 = 20;
}

//	QUESTAO 02.
@$q02 = $_POST['q02'];
if( $q02 == 'a' ){
echo 'Questão 02. Item: ' . $q02 . ') 50 Pontos' . '<br>';
$q02 = 50;
}else if( $q02 == 'b' ){
echo 'Questão 02. Item: ' . $q02 . ') 30 Pontos' . '<br>';
$q02 = 30;
}else if( $q02 == 'c' ){
echo 'Questão 02. Item: ' . $q02 . ') 20 Pontos' . '<br>';
$q02 = 20;
}else if( $q02 == 'd' ){
echo 'Questão 02. Item: ' . $q02 . ') 40 Pontos' . '<br>';
$q02 = 40;
}else if( $q02 == 'e' ){
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
echo 'Questão 03. Item: ' . $q03 . ') 50 Pontos' . '<br>';
$q03 = 50;
}else if( $q03 == 'd' ){
echo 'Questão 03. Item: ' . $q03 . ') 10 Pontos' . '<br>';
$q03 = 10;
}else if( $q03 == 'e' ){
echo 'Questão 03. Item: ' . $q03 . ') 40 Pontos' . '<br>';
$q03 = 40;
}

//	QUESTAO 04.
@$q04 = $_POST['q04'];
if( $q04 == 'a' ){
echo 'Questão 04. Item: ' . $q04 . ') 40 Pontos' . '<br>';
$q04 = 40;
}else if( $q04 == 'b' ){
echo 'Questão 04. Item: ' . $q04 . ') 10 Pontos' . '<br>';
$q04 = 10;
}else if( $q04 == 'c' ){
echo 'Questão 04. Item: ' . $q04 . ') 50 Pontos' . '<br>';
$q04 = 50;
}else if( $q04 == 'd' ){
echo 'Questão 04. Item: ' . $q04 . ') 30 Pontos' . '<br>';
$q04 = 30;
}else if( $q04 == 'e' ){
echo 'Questão 04. Item: ' . $q04 . ') 20 Pontos' . '<br>';
$q04 = 20;
}

//	QUESTAO 05.
@$q05 = $_POST['q05'];
if( $q05 == 'a' ){
echo 'Questão 05. Item: ' . $q05 . ') 50 Pontos' . '<br>';
$q05 = 50;
}else if( $q05 == 'b' ){
echo 'Questão 05. Item: ' . $q05 . ') 0 Pontos' . '<br>';
$q05 = 0;
}else if( $q05 == 'c' ){
echo 'Questão 05. Item: ' . $q05 . ') 30 Pontos' . '<br>';
$q05 = 30;
}else if( $q05 == 'd' ){
echo 'Questão 05. Item: ' . $q05 . ') 10 Pontos' . '<br>';
$q05 = 10;
}else if( $q05 == 'e' ){
echo 'Questão 05. Item: ' . $q05 . ') 40 Pontos' . '<br>';
$q05 = 40;
}

//	QUESTAO 06.
@$q06 = $_POST['q06'];
if( $q06 == 'a' ){
echo 'Questão 06. Item: ' . $q06 . ') 50 Pontos' . '<br>';
$q06 = 50;
}else if( $q06 == 'b' ){
echo 'Questão 06. Item: ' . $q06 . ') 20 Pontos' . '<br>';
$q06 = 20;
}else if( $q06 == 'c' ){
echo 'Questão 06. Item: ' . $q06 . ') 40 Pontos' . '<br>';
$q06 = 40;
}else if( $q06 == 'd' ){
echo 'Questão 06. Item: ' . $q06 . ') 30 Pontos' . '<br>';
$q06 = 30;
}else if( $q06 == 'e' ){
echo 'Questão 06. Item: ' . $q06 . ') 10 Pontos' . '<br>';
$q06 = 10;
}

//	QUESTAO 07.
@$q07 = $_POST['q07'];
if( $q07 == 'a' ){
echo 'Questão 07. Item: ' . $q07 . ') 50 Pontos' . '<br>';
$q07 = 50;
}else if( $q07 == 'b' ){
echo 'Questão 07. Item: ' . $q07 . ') 40 Pontos' . '<br>';
$q07 = 40;
}else if( $q07 == 'c' ){
echo 'Questão 07. Item: ' . $q07 . ') 10 Pontos' . '<br>';
$q07 = 10;
}else if( $q07 == 'd' ){
echo 'Questão 07. Item: ' . $q07 . ') 20 Pontos' . '<br>';
$q07 = 20;
}else if( $q07 == 'e' ){
echo 'Questão 07. Item: ' . $q07 . ') 30 Pontos' . '<br>';
$q07 = 30;
}

//	QUESTAO 08.
@$q08 = $_POST['q08'];
if( $q08 == 'a' ){
echo 'Questão 08. Item: ' . $q08 . ') 20 Pontos' . '<br>';
$q08 = 20;
}else if( $q08 == 'b' ){
echo 'Questão 08. Item: ' . $q08 . ') 50 Pontos' . '<br>';
$q08 = 50;
}else if( $q08 == 'c' ){
echo 'Questão 08. Item: ' . $q08 . ') 10 Pontos' . '<br>';
$q08 = 10;
}else if( $q08 == 'd' ){
echo 'Questão 08. Item: ' . $q08 . ') 40 Pontos' . '<br>';
$q08 = 40;
}else if( $q08 == 'e' ){
echo 'Questão 08. Item: ' . $q08 . ') 30 Pontos' . '<br>';
$q08 = 30;
}

//	QUESTAO 09.
@$q09 = $_POST['q09'];
if( $q09 == 'a' ){
echo 'Questão 09. Item: ' . $q09 . ') 50 Pontos' . '<br>';
$q09 = 50;
}else if( $q09 == 'b' ){
echo 'Questão 09. Item: ' . $q09 . ') 30 Pontos' . '<br>';
$q09 = 30;
}else if( $q09 == 'c' ){
echo 'Questão 09. Item: ' . $q09 . ') 40 Pontos' . '<br>';
$q09 = 40;
}else if( $q09 == 'd' ){
echo 'Questão 09. Item: ' . $q09 . ') 20 Pontos' . '<br>';
$q09 = 20;
}else if( $q09 == 'e' ){
echo 'Questão 09. Item: ' . $q09 . ') 10 Pontos' . '<br>';
$q09 = 10;
}

//	QUESTAO 10.
@$q10 = $_POST['q10'];
if( $q10 == 'a' ){
echo 'Questão 10. Item: ' . $q10 . ') 40 Pontos' . '<br>';
$q10 = 40;
}else if( $q10 == 'b' ){
echo 'Questão 10. Item: ' . $q10 . ') 20 Pontos' . '<br>';
$q10 = 20;
}else if( $q10 == 'c' ){
echo 'Questão 10. Item: ' . $q10 . ') 30 Pontos' . '<br>';
$q10 = 30;
}else if( $q10 == 'd' ){
echo 'Questão 10. Item: ' . $q10 . ') 10 Pontos' . '<br>';
$q10 = 10;
}else if( $q10 == 'e' ){
echo 'Questão 10. Item: ' . $q10 . ') 50 Pontos' . '<br>';
$q10 = 50;
}

//	SOMATORIO.
$soma = $q01 + $q02 + $q03 + $q04 + $q05 + $q06 + $q07 + $q08 + $q09 + $q10;
echo 'Total: ' . $soma . ' Pontos' . '<br><br>';

//	EXIBICAO DO RESULTADO FINAL.
if( $soma >= 100 && $soma <= 170 ){
echo '<p><strong>  VOCÊ É A MERIDA(VALENTE) </p> <p> Você pode parecer um pouco mal humorada ou rude para as pessoas que não te conhecem, mas você é corajosa. Amor não é sua primeira preocupação e você ama a liberdade. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 180 && $soma <= 250 ){
echo '<p><strong> VOCÊ É A TIANA (A PRINCESA E O SAPO) </p> <p> Quando você tem um sonho você nunca desiste, e você está pronta para trabalhar duro (talves demais) para ter o que você quer na vida. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 260 && $soma <= 340 ){
echo '<p><strong> VOCÊ É A RAPUNZEL(ENROLADOS) </p> <p> Você é um tipo de artista, e você gosta muito de conhecer novas pessoas e descobrir coisas novas. Você é curiosa e um pouco romântica. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 350 && $soma <= 420 ){
echo '<p><strong> VOCÊ É A ANA(FROZEN) </p> <p> Você é gentil e sorridente. Você é um pouco solitária, mas tenta não desistir. Também tenta fazer novos amigos que não seja fácil. Você é 100% romântica. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 430 && $soma <= 500 ){
echo '<p><strong> VOCÊ É A ELSA(FROZEN) </p> <p> Você parece um pouco fria a primeira vista, mas você é muito simpática. Você tem medo de machucar as pessoas e você acaba escondendo seus segredos. Você é realista. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}
?>
                        <section>
                            <div id="text-page">
                                <p class="lead">
								Todas as garotinhas gostam de parecer com alguma princesa, então, veja qual princesa da Disney você pode ser. <a href="index.php" class="external"> Voltar a página inicial </a>.</p>
								<form action="TipoDePrincesa.php" method="POST">
                                <h4> 01. Como você se descreveria? </h4><strong>
                                <!--<p><strong>Pellentesque habitant morbi tristique</strong>-->
								<p> a) <input type="radio" name="q01" value="a" /> Energética </p>
								<p> b) <input type="radio" name="q01" value="b" /> Fria </p>
								<p> c) <input type="radio" name="q01" value="c" /> Mal humorada </p>
								<p> d) <input type="radio" name="q01" value="d" /> Solitária </p>
								<p> e) <input type="radio" name="q01" value="e" /> Trabalhadora </p></strong>


								<br><h4> 02. Qual o seu hobby favorito? </h4><strong>
								<p> a) <input type="radio" name="q02" value="a" /> Esculpir </p>
								<p> b) <input type="radio" name="q02" value="b" /> Desenhar e/ou pintar </p>
								<p> c) <input type="radio" name="q02" value="c" /> Nada </p>
								<p> d) <input type="radio" name="q02" value="d" /> Sonhar </p>
								<p> e) <input type="radio" name="q02" value="e" /> Arco e Flecha </p></strong>

								<br><h4> 03. O que você pensa sobre o amor? </a></h4><strong>
								<p> a) <input type="radio" name="q03" value="a" /> Eu não sei bem o que é isso </p>
								<p> b) <input type="radio" name="q03" value="b" /> Sem graça </p>
								<p> c) <input type="radio" name="q03" value="c" /> Você tem que ter certeza que ambos se amam </p>
								<p> d) <input type="radio" name="q03" value="d" /> Nada </p>
								<p> e) <input type="radio" name="q03" value="e" /> Meu sonho é encontrar minha alma gêmea </p></strong>

								<br><h4> 04. Você gosta de dançar? </h4><strong>
								<p> a) <input type="radio" name="q04" value="a" /> Eu não gosto de dançar </p>
								<p> b) <input type="radio" name="q04" value="b" /> Não </p>
								<p> c) <input type="radio" name="q04" value="c" /> Sim </p>
								<p> d) <input type="radio" name="q04" value="d" /> É engraçado </p>
								<p> e) <input type="radio" name="q04" value="e" /> Perda de tempo </p></strong>

								<br><h4> 05. Você gosta de ficar sozinha?  </h4><strong>
								<p> a) <input type="radio" name="q05" value="a" /> Ficar sozinha é estar comigo mesma </p>
								<p> b) <input type="radio" name="q05" value="b" /> 5-10 amigos </p>
								<p> c) <input type="radio" name="q05" value="c" /> Eu tô sempre sozinha </p>
								<p> d) <input type="radio" name="q05" value="d" /> Se estar sozinha significa que sou livre, então sim! </p>
								<p> e) <input type="radio" name="q05" value="e" /> Niguém gosta de ficar sozinho </p></strong>

								<br><h4> 06. Você costuma se chatear com frequência? </h4><strong>
								<p> a) <input type="radio" name="q06" value="a" /> Eu tento manter a calma a maior parte do tempo </p>
								<p> b) <input type="radio" name="q06" value="b" /> Só quando alguém tenta acabar com meus sonhos </p>
								<p> c) <input type="radio" name="q06" value="c" /> Ás vezes </p>
								<p> d) <input type="radio" name="q06" value="d" /> Depende </p>
								<p> e) <input type="radio" name="q06" value="e" /> Sim, niguém me entende </p></strong>

								<br><h4> 07. Como você acredita que um sonho pode se tornar realidade? </h4><strong>
								<p> a) <input type="radio" name="q07" value="a" /> Sonhos nem sempre se tornam realidade </p>
								<p> b) <input type="radio" name="q07" value="b" /> Tendo esperança </p>
								<p> c) <input type="radio" name="q07" value="c" /> Trabalho duro </p>
								<p> d) <input type="radio" name="q07" value="d" /> Você tem que fazer seus sonhos por si mesmo </p>
								<p> e) <input type="radio" name="q07" value="e" /> Pedindo ajuda para alguém </p></strong>

								<br><h4> 08. Qual seu lugar preferido na sala de aula? </h4><strong>
								<p> a) <input type="radio" name="q08" value="a" /> Algum lugar onde eu possa acompanhar a aula </p>
								<p> b) <input type="radio" name="q08" value="b" /> Sozinha </p>
								<p> c) <input type="radio" name="q08" value="c" /> Próxima da janela </p>
								<p> d) <input type="radio" name="q08" value="d" /> Qualquer um, mas perto de gente legal </p>
								<p> e) <input type="radio" name="q08" value="e" /> Onde eu consiga faser algo sem que a professora veja </p></strong>

								<br><h4> 09. Você tem medo de ferir os sentimentos alguém? </h4><strong>
								<p> a) <input type="radio" name="q09" value="a" /> Sim </p>
								<p> b) <input type="radio" name="q09" value="b" /> Caso eu machuque alguém eu vou ajudá-la depois </p>
								<p> c) <input type="radio" name="q09" value="c" /> Eu nunca faria isso por querer </p>
								<p> c) <input type="radio" name="q09" value="c" /> Apenas as pessoas que gosto </p>
								<p> e) <input type="radio" name="q09" value="e" /> Não. Se eu machuquei é porque ele/ela mereceu </p></strong>

								<br><h4> 10. Como é sua relação com sua família? </h4><strong>
								<p> a) <input type="radio" name="q10" value="a" /> Nós somos próximos </p>
								<p> b) <input type="radio" name="q10" value="b" /> Nós somos muitos próximos e compartilhamos sonhos </p>
								<p> c) <input type="radio" name="q10" value="c" /> Eles sabem o que é melhor para mim </p>
								<p> d) <input type="radio" name="q10" value="d" /> Eles não me entendem </p>
								<p> e) <input type="radio" name="q10" value="e" /> Eu não os vejo muito </p></strong><p>
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