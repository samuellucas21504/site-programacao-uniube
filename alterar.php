<?php

$conexao = mysqli_connect("localhost:3306", "root", "1qw23", "db_horario")
  or die("Não funcionou a conexao...");
$id = $_GET['id'];
$sql = "SELECT * FROM estudos WHERE id='$id'";
$resultado = mysqli_query($conexao, $sql)
  or die("Não foi possível realizar a consulta ao banco de dados");
$num = mysqli_num_rows($resultado);
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/hmtl; charset=utf-8">
  <link rel="stylesheet" href="./css/style.css">
  <?php
    while ($linha = mysqli_fetch_array($resultado)) {
      $id = $linha["id"];
      $materia = $linha["materia"];
      $conteudo = $linha["conteudo"];
      $classificacao = $linha["classificacao"];
  ?>
</head>

<body>
  <?php include('./php/navbar.php'); ?>
  <main class='center'>
    <?php echo "<form action='alterar_db.php?id=$id' method='post'>"; ?>

    <table>
      <tr>
        <td>
          <h1 class='section-title center-gambiarra'>Alterar Cadastro</h1>
        </td>
      </tr>
      <tr>
        <?php echo "<td>Id do estudo: $id</td>"; ?>
      </tr>
      <tr>
        <?php echo "<td>Materia:<input name='txtMateriaNova' type='text' class='spacing' value='$materia' size=30 required><span class='required'>*</span></td>"; ?>
      </tr>
      <tr>
        <?php echo "<td>Conteudo:<textarea name='txtConteudoNovo' type='text' class='spacing' size=30 rows='5' cols='33' required>$conteudo</textarea><span class='required'>*</span></td>"; ?>
      </tr>
      <tr>
        <td>
          <label for='btnClassificacaoNovo'>Classifique seu estudo de hoje:</label> <span class='required'>*</span>
        </td>
      </tr>
      <tr>
        <td>
          <input type='radio' value='1' name='btnClassificacaoNovo' required <?php echo ($classificacao == 1) ? "checked" : null; ?>>1
          <input type='radio' value='2' name='btnClassificacaoNovo' <?php echo ($classificacao == 2) ? "checked" : null; ?>>2
          <input type='radio' value='3' name='btnClassificacaoNovo' <?php echo ($classificacao == 3) ? "checked" : null; ?>>3
          <input type='radio' value='4' name='btnClassificacaoNovo' <?php echo ($classificacao == 4) ? "checked" : null; ?>>4
          <input type='radio' value='5' name='btnClassificacaoNovo' <?php echo ($classificacao == 5) ? "checked" : null; ?>>5
        </td>
      </tr>
      <tr>
        <td>
          <input type='submit' value='Alterar' class="gambiarra-center super-gambiarra submit button is-dark">
        </td>
      </tr>
    </table>
  </form>
</main>
  <?php include('./php/footer.php'); ?>
</body>
</html>
<?php
  }
  mysqli_close($conexao);

?>
