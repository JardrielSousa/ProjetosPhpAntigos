<?php
	session_start();

	if(!isset($_SESSION['id'])) {
		echo "<script> alert('Você precisa estar logado para acessar esta página'); window.location='index.php'</script>";
	}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
    <title> QUIZ & TESTES | Sempre Sendo Você | Admin </title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>
    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
</head>
<body>
    <div id="all">
        <header>           <!-- *** TOP *** -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            quizetestes@gmail.com</p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook" title="Ainda não disponível"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus" title="Ainda não disponível"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter" title="Ainda não disponível"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope" title="Ainda não disponível"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *** TOP END *** -->
            <!-- *** NAVBAR *** -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
                <div class="navbar navbar-default yamm" role="navigation" id="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand home" href="admin.php">
                                <!--<img src="img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>-->
                            <h4>QUIZ & TESTES</h4><p><h6>Sempre Sendo Você</h6></p></a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="admin.php"> Home <!--<b class="caret"></b>--></a></li>
                                <li class="dropdown active"><a href="notificacoes.php"> Notificações </a></li>
                                <li><a href="cadpaginas.php"> Cadastrar Páginas </a></li>
                                <li><a href="logout.php"> Sair </a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
                <!-- /#navbar -->
            </div>
            <!-- *** NAVBAR END *** -->
        </header>

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1> Administração </h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- *** LEFT COLUMN *** -->
                    <div class="col-md-9" id="customer-orders">
						<h4>LISTA DE E-MAIL'S (NOTIFICAÇÕES)</h4></p>
                        <div class="box">
<div class="table-responsive">                                
<?php
include('conexaoBD.php');
$res = mysql_query('SELECT * FROM notificacoes');

echo '<table class="table table-hover"><thead><tr><th> ID </th><th> NOME </th><th> E-MAIL </th><th> DELETAR DADOS </th></tr>';

//	ENQUANDO HOUVER DADOS NA TABELA PARA SEREM MOSTRADOS SERÁ EXECUTADO TUDO QUE ESTA DE DENTRO DO WHILE
while($escrever=mysql_fetch_array($res)){

//	ESCREVE CADA LINHA DA TABELA
echo '<tbody><tr><th><span class="label label-info">' . $escrever['id'] . '</span></th><th>' . $escrever['nome'] . '</th><td><span class="label label-info">' . $escrever['email'] . '</span></td><td>' .
'<td><form action="notificacoes.php" method="POST"><input type="text" name="id" size="2" maxlength="3" placeholder="ID" /></td><td><input type="submit" value="deletar" class="btn btn-template-main btn-sm"></form></td>' . '</td></tr>';
}
echo '</table>';

//	ESSE CÓDIGO IRÁ EXCLUIR OS DADOS ESCOLHIDOS PELO ADMIN
if(isset($_POST['id'])){
$id = $_POST['id'];
$deletarDados = mysql_query("DELETE FROM notificacoes WHERE id='$id'");
}else if(isset($_POST['id'])){
echo 'Não foi possível exluir dados...';
}

?>
						<!-- <p class="text-muted lead">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.
						If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.
						<h4>LISTA DE E-MAIL'S PARA NOTIFICAÇÕES</h4></p> -->
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col-md-9 -->
                    <!-- *** LEFT COLUMN END *** -->
                    <!-- *** RIGHT COLUMN *** -->
                    <div class="col-md-3">
                        <!-- *** CUSTOMER MENU *** -->
                        <div class="panel panel-default sidebar-menu">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Menu Vertical </h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="admin.php"><i class="fa fa-list"></i> Vê Contatos </a></li>
									<li class="active"><a href="notificacoes.php"><i class="fa fa-user"></i> Notificações </a></li>
                                    <li><a href="cadpaginas.php"><i class="fa fa-heart"></i> Cadastrar Páginas </a></li>
                                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Sair </a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.col-md-3 -->
                        <!-- *** CUSTOMER MENU END *** -->
                    </div>
                    <!-- *** RIGHT COLUMN END *** -->
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
        <!-- *** GET IT *** -->
        <div id="get-it">
        </div>
        <!-- *** GET IT END *** -->
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