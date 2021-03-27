<?php 

include 'check_form.php'; 

?>

<!DOCTYPE html>
<html>
<head>
  <title>Teste PHP</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <h1 class="page-header">Teste Formulário PHP</h1>

      <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php if (!$erro): ?>
          <div class="alert alert-success">
            Dados recebidos com sucesso:
            <ul>
              <li><strong>Nome</strong>: <?php echo $nome ?>;</li>
              <li><strong>Email</strong>: <?php echo $email ?>;</li>
              <li><strong>Data de nascimento</strong>: <?php echo $data ?>;</li>
              <li><strong>Senha</strong>: <?php echo $senha ?>;</li>
              <li><strong>Confirmação de senha</strong>: <?php echo $Csenha ?>;</li>
              <li><strong>Imagem</strong>: <?php echo $imagem ?>;</li>
              <?php // limpa o formulário.
                $nome = $email = $data = $senha = $Csenha = $imagem = "";
              ?>
            </ul>
          </div>
        <?php else: ?>
          <div class="alert alert-danger">
            Erros no formulário.
          </div>
        <?php endif; ?>
      <?php endif; ?>

      <form class="form-horizontal" name="form_add" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">

        <div class="form-group <?php if(!empty($erro_nome)){echo "has-error";}?>">
          <label for="inputNome" class="col-sm-2 control-label">Nome</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
            <?php if (!empty($erro_nome)){ ?>
              <span class="help-block" id="erro-nome"><?php echo $erro_nome ?></span>
            <?php } ?>
          </div>
        </div>

        <div class="form-group <?php if(!empty($erro_email)){echo "has-error";}?>">
          <label for="inputEmail" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>">
            <?php if (!empty($erro_email)): ?>
              <span class="help-block"><?php echo $erro_email ?></span>
            <?php endif; ?>
          </div>
        </div>

        <div class="form-group <?php if(!empty($erro_data)){echo "has-error";}?>">
          <label for="inputData" class="col-sm-2 control-label">Data de nascimento</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="data" id="data" placeholder="Data" value="<?php echo $data; ?>">
            <?php if (!empty($erro_data)): ?>
              <span class="help-block"><?php echo $erro_data ?></span>
            <?php endif; ?>
          </div>
        </div>   

        <div class="form-group <?php if(!empty($erro_senha)){echo "has-error";}?>">
          <label for="inputSenha" class="col-sm-2 control-label">Senha</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" value="<?php echo $senha; ?>">
            <?php if (!empty($erro_senha)): ?>
              <span class="help-block"><?php echo $erro_senha ?></span>
            <?php endif; ?>
          </div>
        </div>    

        <div class="form-group <?php if(!empty($erro_Csenha)){echo "has-error";}?>">
          <label for="inputCSenha" class="col-sm-2 control-label">Confirmação de senha</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="Csenha" id="Csenha" placeholder="Confirmação de senha" value="<?php echo $Csenha; ?>">
            <?php if (!empty($erro_Csenha)): ?>
              <span class="help-block"><?php echo $erro_Csenha ?></span>
            <?php endif; ?>
          </div>
        </div>  

        <div class="form-group <?php if(!empty($erro_imagem)){echo "has-error";}?>">
          <label for="inputimagem" class="col-sm-2 control-label">Imagem</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" name="imagem" id="imagem" placeholder="Imagem" accept="image/png, image/jpeg" multiple value="<?php echo $imagem; ?>">
            <?php if (!empty($erro_imagem)): ?>
              <span class="help-block"><?php echo $erro_imagem ?></span>
            <?php endif; ?>
          </div>
        </div>  

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button id="form-submit" type="submit" class="btn btn-default">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

  <script src="check_form.js"></script>

</body>
</html>
