<?php

$conexao = mysqli_connect("localhost:3306","root","1qw23", "db_horario")
            or die("Não funcionou a conexao...");
$materiaNova = $_POST["txtMateriaNova"];
$conteudoNovo = $_POST["txtConteudoNovo"];
$classificacaoNova = $_POST["btnClassificacaoNovo"];
$id = $_GET['id'];

$sql = "UPDATE estudos SET materia='$materiaNova',
conteudo='$conteudoNovo',classificacao='$classificacaoNova'
WHERE id='$id'";

$resultado = mysqli_query($conexao, $sql)
or die ("Não foi possível realizar a consulta ao banco de dados");
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
        echo "<h1 class='alert-message'>Estudo alterado com sucesso!</h1>";
        mysqli_close($conexao);
      ?>
      </main>
      <?php
        include('./php/footer.php');
      ?>
  </body>
</html>

