<!DOCTYPE html>
<html>
  <head>
    <?php include "Head.php"; ?>
    <title>Login</title>
  </head>
<body>
  <?php include "header.php" ?>
  <div id="container">
    <div id="login">
      <form action="" method="post" id="entrar-form">
        <h4>E-mail</h4>
        <input type="text" name="usuario"><br><br>
        <h4>Senha</h4>
        <input type="text" name="senha"><br><br>
        <div id="botao-login">
          <div><input class="button" id="entrar" type="submit" value="Entrar"></div>
        </div>
      </form>
      <div id="botao-cadastro"><a><input class="button" id="cadastro" type="submit" value="Cadastrar"></a></div>
      <div id="voltar"><a href="index.php">Voltar</a></div>
    </div>
  </div>
  <?php include "footer.php"; ?>
</body>
</html>
