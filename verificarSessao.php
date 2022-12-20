<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo("
            <script>
                alert('Você não possui permissão de acesso! Faça o login!');
                window.location.href = './login.php';
            </script>
        ");
    }
?>