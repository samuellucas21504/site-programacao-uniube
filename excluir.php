<?php

$conexao = mysqli_connect("localhost:3306","root","1qw23", "db_horario")
            or die("Não funcionou a conexao...");
$id = $_GET['id'];
$sql = "DELETE FROM estudos WHERE id='$id'";
$resultado = mysqli_query($conexao, $sql)
            or die ("Não foi possível realizar a exclusão dos dados.");
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
        echo "<h1 class='alert-message'>O estudo foi excluído com êxito!</h1>";
        mysqli_close($conexao);
      ?>
      </main>
      <?php
        include('./php/footer.php');
      ?>
  </body>
</html>
