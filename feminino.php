<?php
require 'lib/sanitize.php';
require 'db_credentials.php';

$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
  die("Problemas ao conectar com o BD!<br>".
       mysqli_connect_error());
}

$sql = "SELECT produto, preco, imagem, descricao FROM $table WHERE categoria='feminino'";
if(!($produtos_set = mysqli_query($conn,$sql))){
  die("Problemas para carregar os produtos do BD!<br>".
       mysqli_error($conn));
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
  <?php include "Head.php"; ?>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <title>Loja</title>
</head>
<body>
  <?php include "header.php" ?>
  <main>
    <div id="propaganda-img">
      <img width="100%" id="propaganda-img-roupa" src="img/propaganda.png">
    </div>
    <div id="conteudos">

      <div class="conteudo" id="conteudo-produto">

          <?php if(mysqli_num_rows($produtos_set) > 0): ?>
            <?php while($produtos = mysqli_fetch_assoc($produtos_set)): ?>
      
        <div class="caixa-conteudo">
          <a href=""><img src="<?php echo $produtos["imagem"]; ?>" alt="<?php echo $produtos["produto"]; ?>">
          <?php echo "<p>".$produtos["produto"]."<span> R$ ".$produtos["preco"]."</span>"."</p>" ?>
          </a>

        </div>

          <?php endwhile; ?>
          <?php endif; ?>

      </div>

    </div>
  </main>
  <?php include "footer.php"; ?>
</body>
</html>
