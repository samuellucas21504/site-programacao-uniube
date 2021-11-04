<html>

<head>
  <?php
  include('./php/links.php');
  date_default_timezone_set('America/Sao_Paulo');
  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script defer src="js/button.js"></script>
  <title>Sobre</title>
</head>

<body>

  <?php
  include('./php/navbar.php');
  ?>
  <main class="center informativo">
    <div class="sobre-main">
      <h1 class="sobre-title">Como utilizar o site</h1>
      <h2><a href="#comecar-estudos">Como começar a estudar</a> | <a href="#controle-estudos">Como ver os estudos registrados</a></h2>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Ir ao topo"><i class="fa fa-arrow-up"></i></button>
    <div id="comecar-estudos">
      <div>
        <h1 class="sobre-subtitle">Como começar a estudar</h1>
      </div>
      <div>Para começar os estudos clique em "Começar Estudos" ou em "Stud.io"</div>
      <div>
        Assim que entrar na página você verá o seguinte:
        <div class="center">
          <img src="images/Sobre-main.png" alt="Sobre-main" class="image">
        </div>
      </div>
      <div>Clique no botão Começar a estudar quando quiser começar a estudar e quando terminar clique no botão terminar de estudar.</div>
      <div>Quando voce terminar de estudar verá o seguinte:
        <div class="center">
          <img src="images/Sobre-cadastrar.png" alt="Sobre-cadastrar" class="image">
        </div>
        Digite a matéria estudada, o conteudo que voce estudou e o quanto que voce acha que seu estudo rendeu.
      </div>
      <div>Caso o cadastro do estudo tenha sido realizado com sucesso voce verá a seguinte imagem:
        <div class="center">
          <img src="images/Sobre-cadastrar-sucesso.png" alt="Sobre-cadastrar-sucesso" class="image">
        </div>
      </div>
    </div>
    <div id="controle-estudos">
      <div>
        <h1 class="sobre-subtitle">Como ver estudos registrados</h1>
      </div>
      <div>Para ver os estudos registrados clique em "Estudos registrados"</div>
      <div>Assim que clicar voce entrará em uma página parecida a essa:
        <div class="center">
          <img src="images/Sobre-Controle.png" alt="Sobre-controle" class="image">
        </div>
      </div>
      <div>Caso voce ainda não tenha nenhum estudo registrado, sua página será igual a esta.</div>
      <div>No entanto, caso você tenha algum estudo registrado, você terá algo parecido com a seguinte página:
        <div class="center">
          <img src="images/Sobre-controle-exemplo.png" alt="Sobre-controle-exemplo" class="image">
        </div>
      </div>
      <div>Nessa página voce pode Alterar e excluir estudos registrados.</div>
    </div>
    <div><h1 class="sobre-title">HAVE FUN!</h1></div>
  </main>
  <?php
  include('./php/footer.php');
  ?>
</body>

</html>
