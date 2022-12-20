<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>Doar Sangue</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--Jquery-->
    <script src="vendor/jquery/jquery.min.js"></script>

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
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h1 style="text-align: center;"><b>Faça seu login:</b></h1>
        <?php 
            if (isset($_GET['falhou'])){
                echo('
                <div class="alert alert-danger" role="alert">
                    E-mail ou senha inválidos!
                </div>
                <script>
                    $(".alert").fadeIn( 300 ).delay( 3000 ).fadeOut( 400 );
                </script>
            ');
            }
        ?>
        <form method="POST" name="login" action="validacao_login.php">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" required>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
    <div class="col-md-2">
    <button type="submit" class="btn btn-outline-primary" name="BtnCadastrar" value="Cadastrar">Acessar</button>
    </div>
    <div class="col-md-2">
        <button type="reset" class="btn btn-outline-danger" name="BtnLimpar" value="Limpar">Limpar</button>
    </div>
    <div class="col-md-4"></div>
</div>

    </form>
</div>


<br>
<br>
<br>
<br>






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
    </footer>
    <!-- FIM RODAPÉ -->
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Scripts do Site -->

<!-- Fim Scripts do Site -->
    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <!-- <script src="js/jqBootstrapValidation.js"></script> -->
    <!-- <script src="js/contact_me.js"></script> -->

</body>
</html>


    








