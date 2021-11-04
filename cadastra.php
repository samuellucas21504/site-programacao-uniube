<html>

<head>
    <?php
        include('./php/links.php');
        date_default_timezone_set('America/Sao_Paulo');
        include('./php/script.php');
    ?>
    <script defer type="text/javascript" src="./js/app.js"></script>
    <title>Cadastrar Estudo</title>
</head>

<body>

    <?php
        include('./php/navbar.php');
    ?>
    <main class="center">
        <form action="inserir.php" method="post">
            <table>
                <tr>
                    <td id="btnEspacoInicio">
                        <button name="btnEstudoInicio" class="button" id="btnEstudoInicio" onclick="funcDataInicio(); funcHoraInicio()">Começar a Estudar
                    </td>
                    <td id="btnEspacoFinal">
                        <button name="btnEstudoFinal" class="button" id="btnEstudoFinal" onclick="funcDataFinal(); funcHoraFinal()" style="visibility: hidden;">Terminar de Estudar
                    </td>
                </tr>
                <tr id="tr1" style="visibility: hidden;">
                    <td><label for="txtMateria">Matéria estudada: <span class="required">*</span></label></td>
                    <td><input name="txtMateria" type="text" required></td>
                </tr>
                <tr id="tr3" style="visibility: hidden;">
                    <td><label for="txtConteudo">Conteudo estudado: <span class="required">*</span></label></td>
                    <td><textarea name="txtConteudo" type="text" rows="5" cols="33" required></textarea></td>
                </tr>
                <tr id="tr2" style="visibility: hidden;">
                    <td><label for="btnClassificacao">Classifique seu estudo de hoje:</label> <span class="required">*</span></td>
                    <td>
                        <input type="radio" value="1" name="btnClassificacao" required>1
                        <input type="radio" value="2" name="btnClassificacao">2
                        <input type="radio" value="3" name="btnClassificacao">3
                        <input type="radio" value="4" name="btnClassificacao">4
                        <input type="radio" value="5" name="btnClassificacao">5
                </tr>
                <tr>
                    <input name='txtDataInicio' type='hidden' id='dataInicio'><input name='txtHoraInicio' type='hidden' id=horaInicio>
                    <input name='txtDataFinal' type='hidden' id=dataFinal><input name='txtHoraFinal' type='hidden' id=horaFinal>
                </tr>
            </table>

            <div id="div2" class="center"></div>
            <input type="submit" class="gambiarra-center submit button is-dark" value="Cadastrar">
        </form>
    </main>
    <?php
        include('./php/footer.php');
    ?>
</body>

</html>
