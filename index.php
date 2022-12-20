<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="shortcut icon" href="favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Doação de Sangue</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navbaar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Doe Amor, Doe Sangue
      </a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Início</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Seja um Doador</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="hemocentros.php">Hemocentros</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="sobre.php">Sobre</a>
          </li>

          <?php
            require_once('menu_sair.php');
          ?>
        </ul>
      </div>
    </div>
  </nav> <!-- Fim do Navbaar -->

  <header>
    <!-- Começo do Carrossel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide 1  -->
        <div class="carousel-item active" style="background-image: url('01.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="color:black"><b>Doe Sangue!</b></h3>
            <p style="color:black"><b>;)</b></b></p>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url('02.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="color:whitesmoke"><b>Não custa nada doar!</b></h3>
            <p style="color:whitesmoke"><b>Mas vale muito para alguém.</b></p>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url('03.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="color:black"><b>Junte-se!</b></h3>
            <p style="color:black"><b>1,6% da população brasileira é doadora de sangue.</b></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!--Fim do carrossel  -->

  <!-- Page Content -->
  <div class="container">

    <h1 style="text-align: center;" class="my-4 ">Importância de ser um doador.</h1>
    <div class="row">
      <div class="cow md-2">
      </div>
      <div style="font-size: 20px; text-align: justify;" class="cow md-8">

        <p>Doar sangue, além de ser um gesto de amor, é de uma importância vital para se salvar vidas de pessoas que
          necessitam em vários casos tais como: cirurgias, debilitação física, imunologia baixa, acidentes onde houve
          muita perda de sangue e muitos outros, se formos especificar levaremos horas pra detalhar. </p>
        <p> Hoje os bancos de sangue encontram-se num déficit de estoque muito grande, não conseguindo atender as
          necessidades dos hospitais, postos de saúde, clínicas por falta de doadores. Muito se deve a isso a falta de
          informação ao cidadão, dificuldades de acesso aos hemocentros, muitas vezes os doadores precisam se locomover
          a outras cidades para estarem executando um gesto tão nobre e tão essencial para vidas humanas.</p>
        <p> É por isso que sua doação é importante, você pode salvar a vida de alguém com esse gesto tão simples, porém
          importante. E sempre lembre-se, um dia quem precisar pode ser você!</p>
        <br>
        <h3 style="text-align: center;">O que posso fazer no site?</h3><br>
        <ul>
          <li>Ver os hemocentros da regiâo</li>
          <li>Se cadastrar para ser um(a) doador(a)</li>
          <li>Encontrar informações sobre os hemocentros</li>
          <li>Entrar em contato conosco, caso tenha alguma dúvida</li>
        </ul>
      </div>
      <div class="cow md-2">
      </div>
    </div>
  </div>
  <!-- /.container -->

  <!--  RODAPÉ -->
  <footer class="py-2 bg-dark  mt-5">
    <div class="container">
      <div class="row">

        <div class="mx-auto text-white">
          <a href="https://www.instagram.com/explore/tags/ProjetoDoeAmor/?hl=pt-br" class="mx-auto text-white">
            <img src="iconeinsta.png">
            #ProjetoDoeAmor
          </a>
        </div>
        <div class="mx-auto text-white">
          <a href="https://www.facebook.com/107413191139034" class="mx-auto text-white">
            <img src="iconefacebook.png">
            Doe Amor, Doe Sangue
          </a>
        </div>
        <div class="mx-auto text-white">
          <a href="mailto:projetodoeamordoesangue@gmail.com" class="mx-auto text-white">
            <img src="iconeemail.png">
            projetodoeamordoesangue@gmail.com
          </a>
        </div>

      </div>
    </div>
    <!-- /.container -->
  </footer> <!-- FIM RODAPÉ -->

  <!-- Links Bootstrap e JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>