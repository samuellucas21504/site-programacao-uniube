<?php

//Vamos definir as variáveis de data e hora
//para inserção no banco de dados

// Pega os dados do formulário
$materia = $_POST["txtMateria"];
$conteudo = $_POST["txtConteudo"];
$classificacao = $_POST["btnClassificacao"];
$dataInicio = $_POST["txtDataInicio"];
$dataFinal = $_POST["txtDataFinal"];
$horaInicio = $_POST["txtHoraInicio"];
$horaFinal = $_POST["txtHoraFinal"];

$sql = "INSERT INTO estudos (materia, conteudo, classificacao, dataInicio, horaInicio, dataFinal, horaFinal)
 VALUES ('$materia', '$conteudo', '$classificacao', '$dataInicio', '$horaInicio',
'$dataFinal', '$horaFinal')";


//Agora é hora de contatar o mysql

$conexao = mysqli_connect("localhost:3306", "root", "1qw23","db_horario")
or die ("Configuração de Banco de Dados Errada!");
mysqli_set_charset($conexao,"utf8");
//Substitua os valores acima caso não esteje de acordo com sua máquina
//Selecionando o banco de dados...

//Inserindo os dados
//echo "SQL: $sql";
$sql = mysqli_query($conexao, $sql)
or die ("Houve erro na gravação dos dados, por favor, clique em voltar e verifique os campos obrigatórios!");
?>

<html>
    <head>
    <?php
        include('./php/links.php');
    ?>
    </head>
    <body>
        <?php
            include('./php/navbar.php');
        ?>
        <main class="center">
        <?php
            echo "<h1 class='alert-message'>Cadastro efetuado com sucesso!</h1>";
            mysqli_close($conexao);
        ?>
        </main>
        <?php
            include('./php/footer.php');
        ?>
    </body>
</html>
