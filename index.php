<?php
require 'lib/sanitize.php';
require 'db_credentials.php';

$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
  die("Problemas ao conectar com o BD!<br>".
       mysqli_connect_error());
}

$sql = "SELECT produto, preco FROM $table";
if(!($produtos_set = mysqli_query($conn,$sql))){
  die("Problemas para carregar os produtos do BD!<br>".
       mysqli_error($conn));
}



mysqli_close($conn);
?>

<?php
  $nomeProduto=array('','Pijama Short','Pijama Curto Preto','Pijama Longo Básico');
  $precoProduto=array('','R$49,90','R$69,90','R$59,90');
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
          <a href="index.php"><img src="img/produto1.jpg" alt="produto A">
          <?php echo "<p>".$produtos["produto"]."<span> R$ ".$produtos["preco"]."</span>"."</p>" ?>
          </a>
        </div>
          <?php endwhile; ?>
          <?php endif; ?>

        <div class="caixa-conteudo">
          <a href="index.php"><img src="img/produto2.jpg" alt="produto B">
          <?php echo "<p>".$nomeProduto[1]."<span> R$ ".$precoProduto[1]."</span>"."</p>" ?>
          </a>
        </div>
        <div class="caixa-conteudo">
          <a href="index.php"><img src="img/produto3.jpg" alt="produto C">
          <?php echo "<p>".$nomeProduto[2]."<span> R$ ".$precoProduto[2]."</span>"."</p>" ?>
          </a>
        </div>
        <div class="caixa-conteudo">
          <a href="index.php"><img src="img/produto4.jpg" alt="produto D">
          <?php echo "<p>".$nomeProduto[3]."<span> R$ ".$precoProduto[3]."</span>"."</p>" ?>
          </a>
        </div>
      </div>
      <div class="conteudo" id="conteudo-outros">
        <div class="caixa-conteudo">
        <a href="index.php"><img src="img/promocao1.jpg" alt="promoção 1"></a>
        </div>
        <div class="caixa-conteudo">
        <a href="index.php"><img src="img/promocao2.jpg" alt="promoção 2"></a>
        </div>
        <div class="caixa-conteudo">
        <a href="index.php"><img src="img/promocao3.jpg" alt="promoção 3"></a>
        </div>
      </div>
    </div>
  </main>
  <?php include "footer.php"; ?>
</body>
</html>
