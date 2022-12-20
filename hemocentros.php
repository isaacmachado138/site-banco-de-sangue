<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="shortcut icon" href="favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hemocentros</title>

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

<!-- Conteiner da Pagina -->
<div class="container">

  <!-- Cabeçalho -->
  <h1 class="my-4">Hemocentros
    <small>- Siga abaixo todos os hemocentros do estado de São Paulo, encontre o mais perto de você e faça contato!</small>
  </h1>

  <!-- Hemocentro 1 -->
  <div class="row">
    <div class="col-md-7">
      <a href="#">
        <!-- Abaixo link do mapa Google Maps --> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.764498975922!2d-47.851161785043956!3d-21.161768383252795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bde73e9d4e29%3A0x60381fce0ca6eb3a!2sHemocentro%20de%20Ribeir%C3%A3o%20Preto!5e0!3m2!1spt-BR!2sbr!4v1599789320401!5m2!1spt-BR!2sbr" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </a>
    </div>
    <div class="col-md-5">
      <h3>Hemocentro De Ribeirão Preto</h3>
      <br>
      <p>R Ten Catao Roxo, 2501 - Vila Monte Alegre  </p>
      <br>
        <p>Ribeirao Preto, São Paulo - Cep:14051-140</p>
        <br>
        <p>Telefone:(16)21019300 - (16)21019663</p>
      
    </div>
  </div>
  <!-- /.row -->

  <hr>

  <!-- Hemocentro 2 -->
  <div class="row">
    <div class="col-md-7">
      <a href="#">
         <!-- Abaixo link do mapa Google Maps -->
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.944577635901!2d-46.32337618501457!3d-23.962399884485333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce03a8871f9b03%3A0xce04f729e5d1c0da!2stelefone%2C%20R.%20Oswaldo%20Cruz%2C%20197%20-%20Boqueir%C3%A3o%2C%20Santos%20-%20SP%2C%2011045-101!5e0!3m2!1spt-BR!2sbr!4v1599789582325!5m2!1spt-BR!2sbr" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </a>
    </div>
    <div class="col-md-5">
      <h3>Hemonúcleo De Santos</h3>
      <br>
      <p>Rua Oswaldo Cruz, 197 - Boqueirao </p>
      <br>
      <p>Santos, São Paulo - Cep:11045-904</p>
      <br>
      <p>Telefone:(13)32021428</p>
      <br>
    </div>
  </div>
  <!-- /.row -->

  <hr>

 <!-- Hemocentro 3 -->
  <div class="row">
    <div class="col-md-7">
      <a href="#">
         <!-- Abaixo link do mapa Google Maps -->
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.6050903704318!2d-49.0788748850449!3d-22.330770285307775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf67a964f9873d%3A0xd9c02363ca1de50b!2sR.%20Monsenhor%20Claro%2C%208-88%20-%20Centro%2C%20Bauru%20-%20SP%2C%2017010-260!5e0!3m2!1spt-BR!2sbr!4v1599790038547!5m2!1spt-BR!2sbr" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </a>
    </div>
    <div class="col-md-5">
      <h3>Hemonúcleo De Bauru</h3>
      <br>
      <p>R Mns Claro, 888 - Centro</p>
      <br>
      <p>Bauru, São Paulo - Cep:17015-130</p>
      <br>
      <p>Telefone:(14)32344412</p>
    </div>
  </div>
  <!-- /.row -->

  <hr>

<!-- Hemocentro 4 -->
<div class="row">
    <div class="col-md-7">
      <a href="#">
         <!-- Abaixo link do mapa Google Maps -->
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.644792857645!2d-48.55212088504546!3d-22.291441385328252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c7580635ebe1e9%3A0x8e618d20c26d92aa!2sR.%20Don%C3%A1%20Silv%C3%A9ria%2C%20150%20-%20Vila%20Assis%2C%20Ja%C3%BA%20-%20SP%2C%2017210-080!5e0!3m2!1spt-BR!2sbr!4v1599791287124!5m2!1spt-BR!2sbr" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </a>
    </div>
    <div class="col-md-5">
      <h3>Hospital Amaral Carvalho</h3>
      <br>
      <p>R Da Silveria, 150 - Chacara Braz Miraglia</p>
      <br>
      <p>Jau, São Paulo - Cep:17210-080</p>
      <br>
      <p>Telefone:(14)36021200</p>
      
    </div>
  </div>
  <!-- /.row -->


  <hr>

  

  <!-- Pagination -->
  <ul class="pagination justify-content-center">
    
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
  </ul>

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
</footer>
 <!-- FIM RODAPÉ -->
 </body>
</html>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Contact form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>