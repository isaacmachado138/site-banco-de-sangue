<?php require_once('./verificarSessao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    
	<meta charset="utf-8"/>
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
<div class="container">
    <?php
    // Código da Consulta CONTATO
 
    try{
   // abrir a conexao com BD
   require "conexao.php";
   
   $consulta = $conn->prepare ("SELECT * FROM contato");
   $consulta->execute();

    // Código do cabeçalho da tabela
    ?>
    <br>
    <br>
    <br>
    <h1 style="text-align: center;"><b>Conteúdo da tabela de Contato:</b></h1>
    <br>

    <br>
  <table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Mensagem</th>
     
    </tr>
  </thead> 

  <?php
  while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo ("

    <tbody>

    <th>". $row['idcontato'] ."</th>
        <td> ". $row['nome'] ."</td>
        <td> ".$row['email']."</td>
        <td> ".$row['telefone']."</td>
        <td> ".$row['mensagem']."</td>

        </tr>
    ");
}

echo ('</tbody>
</table>');
    // fechar a conexao com BD
$conn = null;

}catch (PDOException $erro) {
echo $erro->getMessage();}
   

?>

</div> 
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

