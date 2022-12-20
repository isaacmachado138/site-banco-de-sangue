<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="shortcut icon" href="favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sobre</title>

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


    <div class="container">
        <br>
        <h1 style="text-align: center;"><b>Doe Amor, Doe Sangue:</b></h1>
        <br>
        
        <p>Este site foi criado com o intuito de mostrar a importância e a necessidade da doação de sangue, além de facilitar o cadastro de doadores e a localização dos hemocentros mais próximos  da nossa região.</p>
        
        <h4><p>Criadores do Projeto:</p></h4>
<br>
        <ul> 
            <li>Cinthia Salatiel;</li>  
            <li>Isaac Machado;</li>
            <li>Marília Pedrosa;</li>
            <li>Milton Verracchi;</li>
            </ul>
            <br>
            <br>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="video.mp4" allowfullscreen></iframe>
              </div>
            <b>
                
                <br>
                <br>
                <br>
                <b>
                    <blockquote class="blockquote">
                        <p class="mb-0"><b>"Ao fazer o bem, não olhe a quem e nem pense duas vezes.
                            Faça o bem de coração, a recompensa de tudo que você faz vem de Deus, e um dia você vai dizer:
                            Valeu a pena." </b></p>
                        <footer class="blockquote-footer"> Custódio <cite title="Título da fonte">Tarcísio</cite></footer>
                      </blockquote>
            
            
              
        </div>

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