<!DOCTYPE html>
<head>
    <?php
        include('./php/links.php');
    ?>
</head>
<body>
    <?php
        include('./php/navbar.php');

        $conexao = mysqli_connect("localhost:3306","root","1qw23","db_horario")
        or die("Não funcionou a conexao...");
        mysqli_set_charset($conexao,"utf8");
        $sql = "SELECT * FROM estudos ORDER BY id ASC";
        $resultado = mysqli_query($conexao, $sql)
        or die ("Não foi possível realizar a consulta ao banco de dados");
      ?>
        <table class='center controle'>
        <tr>
        <th width=15>ID:</th>
        <th width=100>Matéria Estudada:</th>
        <th width=100>Conteudo Estudado:</th>
        <th width=15>Classificação dos Estudo:</th>
        <th width=100>Data de Inicio:</th>
        <th width=100>Horário de Inicio:</th>
        <th width=100>Data Final:</th>
        <th width=100>Horário Final:</th>
        <th width=50>Alterar</th>
        <th width=50>Excluir</th>
        </tr>
      <?php
        while ($linha=mysqli_fetch_array($resultado)) {
        $id = $linha["id"];
        $materia = $linha["materia"];
        $conteudo = $linha["conteudo"];
        $classificacao = $linha["classificacao"];
        $dataInicio = $linha["dataInicio"];
        $horaInicio = $linha["horaInicio"];
        $dataFinal = $linha["dataFinal"];
        $horaFinal = $linha["horaFinal"];

        echo "<tr>";
        echo "<th width=15>$id</th>";
        echo "<th width=100>$materia</th>";
        echo "<th width=250>$conteudo</th>";
        echo "<th width=100>$classificacao</th>";
        echo "<th width=100>$dataInicio</th>";
        echo "<th width=15>$horaInicio</th>";
        echo "<th width=100>$dataFinal</th>";
        echo "<th width=100>$horaFinal</th>";
        echo "<th width=50><a href='alterar.php?id=$id'>Alterar</a><br></th>";
        echo "<th width=50><a href='excluir.php?id=$id'>Excluir</a><br></th>";
        echo "</tr>";

        }


        echo "</table>";

        include('./php/footer.php');
    ?>
</body>
</html>
