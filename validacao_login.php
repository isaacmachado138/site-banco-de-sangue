<?php
// recebendo as variáveis do formulário
$email = $_REQUEST["email"];
$senha = $_REQUEST["senha"];
		
    
    try{
        
        // abrir a conexao com BD
        require "conexao.php";  


        

$consulta = $conn->prepare ("SELECT email, senha
FROM login
WHERE email='$email' and senha='$senha'");
$consulta->execute();

$rows = $consulta->fetch(PDO::FETCH_ASSOC);


if($rows) {
    session_start();
    $_SESSION['login'] = "logado";
    header("location:admin_inicial.php");
}
else{
    header("location:login.php?falhou='true'");
}

        // fechar a conexao com BD
			$conn = null;

		}catch (PDOException $erro) {
			echo $erro->getMessage();
		
    
        }
    ?>