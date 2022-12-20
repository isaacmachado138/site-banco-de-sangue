<html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Doar Sangue</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- icones materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

    <?php
        // Código da Consulta
        try{
        // abrir a conexao com BD
        require "conexao.php";
        $iddoador = $_GET['iddoador'];
        
        $consulta = $conn->prepare ("SELECT * FROM doador where iddoador = $iddoador");
        $consulta->execute();
    ?>
    <!--Inicio Lista -->
    <div class="container mt-2">
    <ul class="list-group">
        <li class="list-group-item bg-dark text-white font-weight-bold">Detalhes do Doador:</li>
    <?php
        $rows = $consulta->fetch(PDO::FETCH_ASSOC);
        foreach ($rows as $key => $linha){
            echo ("
                <li class='list-group-item'><b>".strtoupper($key). ": </b>" .$linha. "</li>
            ");
        }
           
        $conn = null;
        
    ?>    

    </ul>
    <div class="mt-3">
        <a href="./admin_cadastro.php" class='btn btn-danger btn-sm text-white'>
            <i class="material-icons">arrow_back</i>
        </a>
    </div>
    </div>
    <!--Fim Lista -->

    <?php
        }catch (PDOException $erro) {
            echo $erro->getMessage();}
            
            
    ?>
</html>