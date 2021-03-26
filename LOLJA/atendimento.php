<!DOCTYPE html>
<html>
  <head>
    <?php include "Head.php"; ?>
    <link rel="stylesheet" type="text/css" href="css/atendimento.css">
    <title>Login</title>
  </head>
<body>
    <?php include "header.php" ?>
    <div id="container">
      <div id="login">
        <form action="" method="post" id="entrar-form">
            <h4>Digite o seu nome</h4>
            <input type="text" name="nome"><br><br>
            <h4>Digite o seu e-mail</h4>
            <input type="email" name="email"><br><br>
            <h4>Digite a mensagem</h4>
            <input type="text" name="mensagem"><br><br>
            <div id="botao-login">
              <div><input class="button" id="enviar" type="submit" value="Enviar mensagem"></div>
            </div>
        </form>
        <div id="voltar"><a href="index.php">Voltar</a></div>
      </div>
    </div>
  <?php include "footer.php"; ?>
</body>
</html>
