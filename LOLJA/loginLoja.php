<?php
function verifica_campo($texto){
  $texto = trim($texto);
  $texto = stripslashes($texto);
  $texto = htmlspecialchars($texto);
  return $texto;
}

$email = $senha = "";
$erro = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

//------------- EMAIL
  if(empty($_POST["email"])){
    $erro_email = "Email é obrigatório.";
    $erro = true;
  }

  else if (!(filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL))){
    $erro_email = "Email inválido.";
    $erro = true;
  }
  else{
    $email = verifica_campo($_POST["email"]);
  }

//------------- SENHA
  if(empty($_POST["senha"])){
    $erro_senha = "Senha é obrigatório.";
    $erro = true;
  }
  else{
    $senha = verifica_campo($_POST["senha"]);
  }
};
?>

<!DOCTYPE html>
<html>
  <head>
    <?php include "Head.php"; ?>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
<body>

  <div id="container">
    <div id="login">

      <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php if (!$erro): ?>
          <div style="color:red;">

            Ocorreu algum erro no servidor. Tente novamente mais tarde!

              <?php
                $email = $senha = "";
              ?>

          </div>

        <?php else: ?>
          <div style="color:red;">

            Erros no formulário.
            <br>

          </div>
        <?php endif; ?>
      <?php endif; ?>

      <form name="form_add" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  id="entrar-form">

          <div>
            <h4>E-mail</h4>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite aqui o seu email" value="<?php echo $email; ?>">
            <?php if (!empty($erro_email)){ ?>
              <br><span style="color:red;" id="erro-email"><?php echo $erro_email ?></span>
            <?php } ?>
          </div>

        <br><br>

          <div>
            <h4>Senha</h4>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite aqui a sua senha" value="<?php echo $senha; ?>">
            <?php if (!empty($erro_senha)){ ?>
              <br><span style="color:red;" id="erro-senha"><?php echo $erro_senha ?></span><br>
            <?php } ?>
          </div>

        <div id="botao-login">
          <div><input class="button" id="form-submit" type="submit" value="Entrar"></div>
        </div>

      </form>
      <div id="botao-cadastro"><a><input class="button" id="cadastro" type="submit" value="Cadastrar"></a></div>
      <div id="voltar"><a href="index.php">Voltar</a></div>
    </div>
  </div>

  <script src="js/login.js"></script>

</body>
</html>
