<?php
  $nomeProduto=array('Blusa Jeans','Pijama Short','Pijama Curto Preto','Pijama Longo Básico');
  $precoProduto=array('R$89,90','R$49,90','R$69,90','R$59,90');
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
        <div class="caixa-conteudo">
          <a href="index.php"><img src="img/produto1.jpg" alt="produto A">
          <?php echo "<p>".$nomeProduto[0]."<span>".$precoProduto[0]."</span>"."</p>" ?>
          </a>
        </div>
        <div class="caixa-conteudo">
          <a href="index.php"><img src="img/produto2.jpg" alt="produto B">
          <?php echo "<p>".$nomeProduto[1]."<span>".$precoProduto[1]."</span>"."</p>" ?>
          </a>
        </div>
        <div class="caixa-conteudo">
          <a href="index.php"><img src="img/produto3.jpg" alt="produto C">
          <?php echo "<p>".$nomeProduto[2]."<span>".$precoProduto[2]."</span>"."</p>" ?>
          </a>
        </div>
        <div class="caixa-conteudo">
          <a href="index.php"><img src="img/produto4.jpg" alt="produto D">
          <?php echo "<p>".$nomeProduto[3]."<span>".$precoProduto[3]."</span>"."</p>" ?>
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
