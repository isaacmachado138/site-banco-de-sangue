<?php session_start(); ?>
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

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

</head>

<?php
/*
// Inicia sessões
session_start();

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"]))
{
// Usuário não logado! Redireciona para a página de login
header("Location: admin_cadastro.php");
exit;
}*/
?>
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


    <!-- Page Content -->
    <div class="container">



        <!-- Content Row -->


        <!-- Formulário -->
        <h1 style="text-align: center;"><b>Faça seu cadastro:</b></h1>
        <form method="POST" name="frm" action="">
        
<!-- Tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="info-pessoal" data-toggle="tab" href="#tab-pessoal"
                        role="tab">Informações Pessoais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="info-saude" data-toggle="tab" href="#tab-saude" role="tab">Informações de
                        Saude</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="info-tratamento" data-toggle="tab" href="#tab-tratamento"
                        role="tab">Informações de Tratamentos</a>
                </li>
                <?php
                        require_once('menu_sair.php');
                ?>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-pessoal" role="tabpanel">
                
            <!-- Info Pessoais -->   <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="Name">Nome</label>
                                <input type="text" name="nome" class="form-control" id="Name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Idade">Idade</label>
                                <input type="number" name="idade" class="form-control" id="Idade" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" id="estado" name="estado" required>
                                    <option value="0" selected disabled> Selecione... </option>
                                    <option value="AC"> Acre </option>
                                    <option value="AL"> Alagoas </option>
                                    <option value="AP"> Amapá </option>
                                    <option value="AM"> Amazonas </option>
                                    <option value="BA"> Bahia </option>
                                    <option value="CE"> Ceará </option>
                                    <option value="DF"> Distrito Federal </option>
                                    <option value="ES"> Espírito Santo </option>
                                    <option value="GO"> Goiás </option>
                                    <option value="MA"> Maranhão </option>
                                    <option value="MT"> Mato Grosso </option>
                                    <option value="MS"> Mato Grosso do Sul </option>
                                    <option value="MG"> Minas Gerais </option>
                                    <option value="PA"> Pará </option>
                                    <option value="PB"> Paraíba </option>
                                    <option value="PR"> Paraná </option>
                                    <option value="PE"> Pernambuco </option>
                                    <option value="PI"> Piauí </option>
                                    <option value="RJ"> Rio de Janeiro </option>
                                    <option value="RN"> Rio Grande do Norte </option>
                                    <option value="RS"> Rio Grande do Sul </option>
                                    <option value="RO"> Rondônia </option>
                                    <option value="RR"> Rorâima </option>
                                    <option value="SC"> Santa Catarina </option>
                                    <option value="SP"> São Paulo </option>
                                    <option value="SE"> Sergipe </option>
                                    <option value="TO"> Tocantins </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="Cidade">Cidade</label>
                                <input type="text" name="cidade" class="form-control" id="Cidade" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Endereco">Endereço</label>
                                <input type="text" name="endereco" class="form-control" id="Endereco" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Celular">Celular</label>
                                <input type="text" name="celular" class="form-control" id="Celular">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Endereco de email">Endereço de email:</label>
                                <input type="email" name="email" class="form-control" id="Endereco de email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Documento identificacao">RG:</label>
                                <input type="text" name="rg" class="form-control"
                                    id="Documento identificacao" required>
                            </div>
                        </div>
                    </div>
            <!-- Fim Info Pessoais -->
                </div>
                <div class="tab-pane fade" id="tab-saude" role="tabpanel">
                    <!-- Info Saude -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Peso">Peso</label>
                                <input type="number" name="peso" class="form-control" id="Peso" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Tipo de sangue">Tipo de sangue</label>
                                <select class="form-control" id="Tipo de sangue" name="tipo_sangue" required>
                                    <option value="0" selected disabled> Selecione... </option>
                                    <option value="Desconhecido">Não sei</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="Sexo">Sexo</label>
                                <select class="form-control" id="Sexo" name="sexo" required>
                                    <option value="0" selected disabled> Selecione... </option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="Fumante">É fumante?</label>
                                <select class="form-control" id="Fumante" name="fumante" required>
                                    <option value="0" selected disabled> Selecione... </option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="Ha quanto tempo?">Há quanto tempo?(meses)</label>
                                <input type="number" name="tempo_fumante" class="form-control" value="0" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Ingere bebidas alcoólicas?">Ingere bebidas alcoólicas?</label>
                                <select class="form-control" id="Ingere bebidas alcoólicas?" name="alcoolatra" required>
                                    <option value="0" selected disabled> Selecione... </option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Colocou tatuagem ou piercing ha menos de 1 ano">Colocou tatuagem ou piercing
                                    há
                                    menos de 1 ano?</label>
                                <select class="form-control" id="Colocou tatuagem ou piercing ha menos de 1 ano"
                                    name="tatuagem" required>
                                    <option value="0" selected disabled> Selecione... </option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="E usuario de drogas">É usuário de drogas?</label>
                                <select class="form-control" id="E usuario de drogas" name="usa_drogas" required>
                                    <option value="0" selected disabled> Selecione... </option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                    <!-- Fim Info Saude -->
                </div>
                <div class="tab-pane fade" id="tab-tratamento" role="tabpanel">
                    <!-- Info Tratamentos -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Toma alguma medicacao">Toma alguma medicação</label>
                                <select class="form-control" id="Toma alguma medicacao" name="medicacao" required>
                                    <option value="0" selected disabled> Selecione... </option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="Qual?">Qual?</label>
                                <input type="text" name="nome_medicacao" class="form-control" id="Qual?" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Realizou alguma cirurgia recentemente">Realizou alguma cirurgia
                                    recentemente?</label>
                                <select class="form-control" id="Realizou alguma cirurgia recentemente" name="cirurgia" required>
                                    <option value="0" selected disabled> Selecione... </option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Ha quanto tempo?">Há quanto tempo (meses)?</label>
                                <input type="number" name="tempo_cirurgia" class="form-control" id="Ha quanto tempo?">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Tomou alguma vacina nos ultimos 30 dias">Tomou alguma vacina nos últimos 30
                                    dias?</label>
                                <select class="form-control" id="Tomou alguma vacina nos ultimos 30 dias" name="vacina" required>
                                    <option value="0" selected disabled> Selecione... </option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="Qual?">Qual?</label>
                                <input type="text" name="nome_vacina" class="form-control" id="Qual?">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Realizou algum exame nos ultimos 6 meses">Realizou algum exame nos últimos 6
                                    meses?</label>
                                <select class="form-control" id="Realizou algum exame nos ultimos 6 meses" name="exame" required>
                                    <option value="0" selected disabled> Selecione... </option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="Qual?">Qual?</label>
                                <input type="text" name="nome_exame" class="form-control" id="Qual?">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="E portador de doencas infectocontagiosas">É portador de doenças
                                    infectocontagiosas?</label>
                                <select class="form-control" id="E portador de doencas infectocontagiosas"
                                    name="doenca" required>
                                    <option value="0" selected disabled> Selecione... </option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="Qual?">Quais?</label>
                                <input type="text" name="nome_doenca" class="form-control" id="Qual?">
                            </div>
                        </div>
                    </div>
                    <!-- Info Tratamentos -->
                </div>
            </div>

            <!-- Conteúdo do formulário -->




            <div class="row">
                <div class="col-md-4">
                    <p>Prencha os dados em todas as abas</p>
                </div>
                <div class="col-md-2">
                <button type="submit" class="btn btn-outline-primary" name="BtnCadastrar" value="Cadastrar">Cadastrar</button>
                </div>
                <div class="col-md-2">
                    <button type="reset" class="btn btn-outline-danger" name="BtnLimpar" value="Limpar">Limpar</button>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </form>
    </div>
    <!-- /.row -->


    <!--  RODAPÉ -->
    <footer class="py-2 bg-dark mt-5">
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

</body>
</html>
<?php

	if(isset($_REQUEST["BtnCadastrar"])) {		
		
        try{
			
			// abrir a conexao com BD
			require "conexao.php";  

		// recebendo as variáveis do formulário
		
        $nome = $_REQUEST["nome"];
        $idade = $_REQUEST["idade"];
        $estado = $_REQUEST["estado"];
		$cidade = $_REQUEST["cidade"];
        $endereco = $_REQUEST["endereco"];
        $celular = $_REQUEST["celular"];
        $email = $_REQUEST["email"];
        $rg = $_REQUEST["rg"];
        $peso = $_REQUEST["peso"];
        $tipo_sangue = $_REQUEST["tipo_sangue"];
        $sexo = $_REQUEST["sexo"];
        $fumante = $_REQUEST["fumante"];
        $tempo_fumante = $_REQUEST["tempo_fumante"];
        $alcoolatra = $_REQUEST["alcoolatra"];
        $tatuagem = $_REQUEST["tatuagem"];
        $usa_drogas = $_REQUEST["usa_drogas"];
        $medicacao = $_REQUEST["medicacao"];
        $nome_medicacao = $_REQUEST["nome_medicacao"];
        $cirurgia = $_REQUEST["cirurgia"];
        $tempo_cirurgia = $_REQUEST["tempo_cirurgia"];
        $vacina = $_REQUEST["vacina"];
        $nome_vacina = $_REQUEST["nome_vacina"];
        $exame = $_REQUEST["exame"];
        $nome_exame = $_REQUEST["nome_exame"];
        $doenca = $_REQUEST["doenca"];
        $nome_doenca = $_REQUEST["nome_doenca"];
		$data_cadastro = date('Y-m-d H:i:s');
		
		// Gravar no BD 
        $insert = $conn-> prepare 
        ("INSERT INTO doador (nome, idade, estado, cidade, endereco, celular, email, rg, peso, tipo_sangue, sexo, fumante, tempo_fumante, alcoolatra, tatuagem, usa_drogas, medicacao, nome_medicacao, cirurgia, tempo_cirurgia, vacina, nome_vacina, exame, nome_exame, doenca, nome_doenca, data_cadastro) 
        VALUES (:nome,:idade,:estado,:cidade,:endereco,:celular,:email,:rg,:peso,:tipo_sangue,:sexo,:fumante,:tempo_fumante,:alcoolatra,:tatuagem,:usa_drogas,:medicacao,:nome_medicacao,:cirurgia,:tempo_cirurgia,:vacina,:nome_vacina,:exame,:nome_exame,:doenca,:nome_doenca,:data_cadastro) ");
		
        /*$insert-> bindValue (':iddoador', null); */
        $insert-> bindValue (':nome', $nome); 
        $insert-> bindValue (':idade', $idade); 
        $insert-> bindValue (':estado', $estado); 
        $insert-> bindValue (':cidade', $cidade); 
        $insert-> bindValue (':endereco', $endereco); 
        $insert-> bindValue (':celular', $celular); 
        $insert-> bindValue (':email', $email); 
        $insert-> bindValue (':rg', $rg); 
        $insert-> bindValue (':peso', $peso); 
        $insert-> bindValue (':tipo_sangue', $tipo_sangue);
        $insert-> bindValue (':sexo', $sexo);
        $insert-> bindValue (':fumante', $fumante);
        $insert-> bindValue (':tempo_fumante', $tempo_fumante);
        $insert-> bindValue (':alcoolatra', $alcoolatra);
        $insert-> bindValue (':tatuagem', $tatuagem);
        $insert-> bindValue (':usa_drogas', $usa_drogas);
        $insert-> bindValue (':medicacao', $medicacao); 
        $insert-> bindValue (':nome_medicacao', $nome_medicacao);
        $insert-> bindValue (':cirurgia', $cirurgia);
        $insert-> bindValue (':tempo_cirurgia', $tempo_cirurgia);
        $insert-> bindValue (':vacina', $vacina);
        $insert-> bindValue (':nome_vacina', $nome_vacina);
        $insert-> bindValue (':exame', $exame);
        $insert-> bindValue (':nome_exame', $nome_exame);
        $insert-> bindValue (':doenca', $doenca);
        $insert-> bindValue (':nome_doenca', $nome_doenca);
        $insert-> bindValue (':data_cadastro', $data_cadastro);
		
		//Executa o comando SQL INSERT
        $insert->execute();
        
        echo "<script language=javascript>
alert('CADASTRADO COM SUCESSO !! Aguarde a mensagem do hemocentro via email.');
location.href = 'cadastro.php';
</script>";
		
			// fechar a conexao com BD
			$conn = null;

		}catch (PDOException $erro) {
			echo $erro->getMessage();}
		
    }	
    
    
   
?>

