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
                        <h1> Qual é o apelido perfeito para você? </h1>
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
echo 'Questão 01. Item: ' . $q01 . ') 10 Pontos' . '<br>';
$q01 = 10;
}else if( $q01 == 'b' ){
echo 'Questão 01. Item: ' . $q01 . ') 50 Pontos' . '<br>';
$q01 = 50;
}else if( $q01 == 'c' ){
echo 'Questão 01. Item: ' . $q01 . ') 40 Pontos' . '<br>';
$q01 = 40;
}else if( $q01 == 'd' ){
echo 'Questão 01. Item: ' . $q01 . ') 30 Pontos' . '<br>';
$q01 = 30;
}else if( $q01 == 'e' ){
echo 'Questão 01. Item: ' . $q01 . ') 20 Pontos' . '<br>';
$q01 = 20;
}

//	QUESTAO 02.
@$q02 = $_POST['q02'];
if( $q02 == 'a' ){
echo 'Questão 02. Item: ' . $q02 . ') 20 Pontos' . '<br>';
$q02 = 20;
}else if( $q02 == 'b' ){
echo 'Questão 02. Item: ' . $q02 . ') 50 Pontos' . '<br>';
$q02 = 50;
}else if( $q02 == 'c' ){
echo 'Questão 02. Item: ' . $q02 . ') 30 Pontos' . '<br>';
$q02 = 30;
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
echo 'Questão 04. Item: ' . $q04 . ') 50 Pontos' . '<br>';
$q04 = 50;
}else if( $q04 == 'b' ){
echo 'Questão 04. Item: ' . $q04 . ') 40 Pontos' . '<br>';
$q04 = 40;
}else if( $q04 == 'c' ){
echo 'Questão 04. Item: ' . $q04 . ') 20 Pontos' . '<br>';
$q04 = 20;
}else if( $q04 == 'd' ){
echo 'Questão 04. Item: ' . $q04 . ') 10 Pontos' . '<br>';
$q04 = 10;
}else if( $q04 == 'e' ){
echo 'Questão 04. Item: ' . $q04 . ') 30 Pontos' . '<br>';
$q04 = 30;
}

//	QUESTAO 05.
@$q05 = $_POST['q05'];
if( $q05 == 'a' ){
echo 'Questão 05. Item: ' . $q05 . ') 40 Pontos' . '<br>';
$q05 = 40;
}else if( $q05 == 'b' ){
echo 'Questão 05. Item: ' . $q05 . ') 50 Pontos' . '<br>';
$q05 = 50;
}else if( $q05 == 'c' ){
echo 'Questão 05. Item: ' . $q05 . ') 30 Pontos' . '<br>';
$q05 = 30;
}else if( $q05 == 'd' ){
echo 'Questão 05. Item: ' . $q05 . ') 20 Pontos' . '<br>';
$q05 = 20;
}else if( $q05 == 'e' ){
echo 'Questão 05. Item: ' . $q05 . ') 10 Pontos' . '<br>';
$q05 = 10;
}

//	QUESTAO 06.
@$q06 = $_POST['q06'];
if( $q06 == 'a' ){
echo 'Questão 06. Item: ' . $q06 . ') 30 Pontos' . '<br>';
$q06 = 30;
}else if( $q06 == 'b' ){
echo 'Questão 06. Item: ' . $q06 . ') 40 Pontos' . '<br>';
$q06 = 40;
}else if( $q06 == 'c' ){
echo 'Questão 06. Item: ' . $q06 . ') 10 Pontos' . '<br>';
$q06 = 10;
}else if( $q06 == 'd' ){
echo 'Questão 06. Item: ' . $q06 . ') 50 Pontos' . '<br>';
$q06 = 50;
}else if( $q06 == 'e' ){
echo 'Questão 06. Item: ' . $q06 . ') 20 Pontos' . '<br>';
$q06 = 20;
}

//	QUESTAO 07.
@$q07 = $_POST['q07'];
if( $q07 == 'a' ){
echo 'Questão 07. Item: ' . $q07 . ') 20 Pontos' . '<br>';
$q07 = 20;
}else if( $q07 == 'b' ){
echo 'Questão 07. Item: ' . $q07 . ') 50 Pontos' . '<br>';
$q07 = 50;
}else if( $q07 == 'c' ){
echo 'Questão 07. Item: ' . $q07 . ') 40 Pontos' . '<br>';
$q07 = 40;
}else if( $q07 == 'd' ){
echo 'Questão 07. Item: ' . $q07 . ') 30 Pontos' . '<br>';
$q07 = 30;
}else if( $q07 == 'e' ){
echo 'Questão 07. Item: ' . $q07 . ') 10 Pontos' . '<br>';
$q07 = 10;
}

//	QUESTAO 08.
@$q08 = $_POST['q08'];
if( $q08 == 'a' ){
echo 'Questão 08. Item: ' . $q08 . ') 40 Pontos' . '<br>';
$q08 = 40;
}else if( $q08 == 'b' ){
echo 'Questão 08. Item: ' . $q08 . ') 30 Pontos' . '<br>';
$q08 = 30;
}else if( $q08 == 'c' ){
echo 'Questão 08. Item: ' . $q08 . ') 10 Pontos' . '<br>';
$q08 = 10;
}else if( $q08 == 'd' ){
echo 'Questão 08. Item: ' . $q08 . ') 20 Pontos' . '<br>';
$q08 = 20;
}else if( $q08 == 'e' ){
echo 'Questão 08. Item: ' . $q08 . ') 50 Pontos' . '<br>';
$q08 = 50;
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
echo 'Questão 09. Item: ' . $q09 . ') 20 Pontos' . '<br>';
$q09 = 20;
}else if( $q09 == 'd' ){
echo 'Questão 09. Item: ' . $q09 . ') 40 Pontos' . '<br>';
$q09 = 40;
}else if( $q09 == 'e' ){
echo 'Questão 09. Item: ' . $q09 . ') 10 Pontos' . '<br>';
$q09 = 10;
}

//	QUESTAO 10.
@$q10 = $_POST['q10'];
if( $q10 == 'a' ){
echo 'Questão 10. Item: ' . $q10 . ') 50 Pontos' . '<br>';
$q10 = 50;
}else if( $q10 == 'b' ){
echo 'Questão 10. Item: ' . $q10 . ') 20 Pontos' . '<br>';
$q10 = 20;
}else if( $q10 == 'c' ){
echo 'Questão 10. Item: ' . $q10 . ') 40 Pontos' . '<br>';
$q10 = 40;
}else if( $q10 == 'd' ){
echo 'Questão 10. Item: ' . $q10 . ') 10 Pontos' . '<br>';
$q10 = 10;
}else if( $q10 == 'e' ){
echo 'Questão 10. Item: ' . $q10 . ') 30 Pontos' . '<br>';
$q10 = 30;
}

//	SOMATORIO.
$soma = $q01 + $q02 + $q03 + $q04 + $q05 + $q06 + $q07 + $q08 + $q09 + $q10;
echo 'Total: ' . $soma . ' Pontos' . '<br><br>';

//	EXIBICAO DO RESULTADO FINAL.
if( $soma >= 100 && $soma <= 170 ){
echo '<p><strong>  VOCÊ É DOIDÃO/DOIDONA </p> <p> Você é um pouco estranho(a), sempre diferente do resto. As pessoas saem com você para dar uma quebrada na rotina de conformidade. Sua forma única de ser te torna alguém interessante e misterioso. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 180 && $soma <= 250 ){
echo '<p><strong> VOCÊ É DURÃO/DURONA </p> <p> Você é firme e intimidador(a)! Niguém se mete com você. Você consegue farejar o medo, mas você raramente se assusta. Seus amigos são sortudos de ter você do lado deles. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 260 && $soma <= 340 ){
echo '<p><strong> VOCÊ É FOFISSÍMO/FOFÍFFIMA </p> <p> Você sabe como se comuicar com os outros. Você é adorável, fofo(a), e caloroso(a) como um peixe-dourado. Você tem uma grande personagem, com uma pitada de aleatoriedade. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 350 && $soma <= 420 ){
echo '<p><strong> VOCÊ É PRECIOSO/PRECIOSA </p> <p> Você tente a brilhar e se destacar na multidão. Você tem um espírito encatador que foi feito para ser centro das atenções. Algo novo está sempre no seu horizonte. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}else if( $soma >= 430 && $soma <= 500 ){
echo '<p><strong> VOCÊ É CRÂNIO/CRÂNIA </p> <p> Você normalmente pensa e reflete sobre o que está por vir. Você parece uma pessoa inteligente, talves até nerd ou geek. Você é capas de dar conselhos fortes e realistas aos seus amigos. </strong></p><p><a href="index.php"> Voltar para página inicial </a></p>';
}
?>
                        <section>
                            <div id="text-page">
                                <p class="lead">
								Apelido(s) é algo comum entre todos nós, pode ser algo bom, ruim, difícil de se acostumar, com ou sem significa, ou até mesmo inventado por algum amigo para facilitar seu nome, etc. Mais para várias pessoas pode ser até engraçado. <a href="index.php" class="external"> Voltar a página inicial </a>.</p>
								<form action="TipoDeApelido.php" method="POST">
                                <h4> 01. Como você se descreveria? </h4><strong>
                                <!--<p><strong>Pellentesque habitant morbi tristique</strong>-->
								<p> a) <input type="radio" name="q01" value="a" /> Exquisito(a) </p>
								<p> b) <input type="radio" name="q01" value="b" /> Inteligente </p>
								<p> c) <input type="radio" name="q01" value="c" /> Encantador(a) </p>
								<p> d) <input type="radio" name="q01" value="d" /> Legal </p>
								<p> e) <input type="radio" name="q01" value="e" /> Forte </p></strong>

								<br><h4> 02. O que você gosta de fazer? </h4><strong>
								<p> a) <input type="radio" name="q02" value="a" /> Lutar </p>
								<p> b) <input type="radio" name="q02" value="b" /> Estudar </p>
								<p> c) <input type="radio" name="q02" value="c" /> Fazer novos amigos </p>
								<p> d) <input type="radio" name="q02" value="d" /> <a href="https://www.google.com.br/search?q=o+que+%C3%A9+Flertar&oq=o+que+%C3%A9+Flertar&aqs=chrome..69i57.202j0j7&sourceid=chrome&ie=UTF-8"  title="Clique e veja o que é fletar"> Fletar </a></p>
								<p> e) <input type="radio" name="q02" value="e" /> Ficar sozinho(a) </p></strong>

								<br><h4> 03. Qual gênero de filmes você gosta mais? </a></h4><strong>
								<p> a) <input type="radio" name="q03" value="a" /> Comédia e Fantasia </p>
								<p> b) <input type="radio" name="q03" value="b" /> Ação e Crime </p>
								<p> c) <input type="radio" name="q03" value="c" /> Drama e Ficção </p>
								<p> d) <input type="radio" name="q03" value="d" /> Terror e Suspense </p>
								<p> e) <input type="radio" name="q03" value="e" /> Romance e Aventura </p></strong>

								<br><h4> 04. Quais roupas você gosta mais de usar? </h4><strong>
								<p> a) <input type="radio" name="q04" value="a" /> Formal/Uniforme </p>
								<p> b) <input type="radio" name="q04" value="b" /> Última moda </p>
								<p> c) <input type="radio" name="q04" value="c" /> Roupas esportivas </p>
								<p> d) <input type="radio" name="q04" value="d" /> Qualquer coisa não comum </p>
								<p> e) <input type="radio" name="q04" value="e" /> Casual, jeans, camiseta </p></strong>

								<br><h4> 05. Qual o seu sabor de sorvete preferido?  </h4><strong>
								<p> a) <input type="radio" name="q05" value="a" /> Morango </p>
								<p> b) <input type="radio" name="q05" value="b" /> Baunilha </p>
								<p> c) <input type="radio" name="q05" value="c" /> Qualquer um, com muita cobertura </p>
								<p> d) <input type="radio" name="q05" value="d" /> Chocolate </p>
								<p> e) <input type="radio" name="q05" value="e" /> Eu tô de dieta </p></strong>

								<br><h4> 06. Qual é sua raça preferida de gato e cachorro? </h4><strong>
								<p> a) <input type="radio" name="q06" value="a" /> Persa e Labrador </p>
								<p> b) <input type="radio" name="q06" value="b" /> Siamês e Jack Russel Terrier </p>
								<p> c) <input type="radio" name="q06" value="c" /> Esfing e Crista Chinês </p>
								<p> d) <input type="radio" name="q06" value="d" /> Abissínio e Pastor Alemão </p>
								<p> e) <input type="radio" name="q06" value="e" /> Maine Coon e Pit Bull </p></strong>

								<br><h4> 07. O que é mais importante para você? </h4><strong>
								<p> a) <input type="radio" name="q07" value="a" /> Lealdade </p>
								<p> b) <input type="radio" name="q07" value="b" /> Carreira </p>
								<p> c) <input type="radio" name="q07" value="c" /> Elegância </p>
								<p> d) <input type="radio" name="q07" value="d" /> Diversão </p>
								<p> e) <input type="radio" name="q07" value="e" /> Nada </p></strong>

								<br><h4> 08. Escolha um metal: </h4><strong>
								<p> a) <input type="radio" name="q08" value="a" /> Ouro </p>
								<p> b) <input type="radio" name="q08" value="b" /> Prata </p>
								<p> c) <input type="radio" name="q08" value="c" /> Mercúrio </p>
								<p> d) <input type="radio" name="q08" value="d" /> Ferro </p>
								<p> e) <input type="radio" name="q08" value="e" /> Cobre </p></strong>

								<br><h4> 09. Escolha uma frase: </h4><strong>
								<p> a) <input type="radio" name="q09" value="a" /> "Felicidade é a coisa mais rara que conheço em pessoas inteligentes" </p>
								<p> b) <input type="radio" name="q09" value="b" /> "Não chore porque acabou, sorria porque aconteceu" </p>
								<p> c) <input type="radio" name="q09" value="c" /> "O que não te mata te torna mais forte!" </p>
								<p> c) <input type="radio" name="q09" value="c" /> "O amor à beleza é gostoso. A criação da beleza é arte" </p>
								<p> e) <input type="radio" name="q09" value="e" /> "Talvez o seu estranho seja o meu normal. Quem pode dizer algo?" </p></strong>

								<br><h4> 10. Você vai usar o apelido desse teste? </h4><strong>
								<p> a) <input type="radio" name="q10" value="a" /> Não posso responder já que não sei a resposta </p>
								<p> b) <input type="radio" name="q10" value="b" /> Não sei </p>
								<p> c) <input type="radio" name="q10" value="c" /> Não </p>
								<p> d) <input type="radio" name="q10" value="d" /> Sim, só se for legal </p>
								<p> e) <input type="radio" name="q10" value="e" /> Eu não sei, ele pode ser estúpido </p></strong><p>
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