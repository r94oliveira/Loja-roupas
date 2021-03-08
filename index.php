<?php 

  $nomeProduto=array('Blusa Jeans','Pijama Short','Pijama Curto Preto','Pijama Longo Básico');

  $precoProduto=array('R$89,90','R$49,90','R$69,90','R$59,90');

?> 

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <title>Loja</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/clicker.js"></script>
</head>

<body>

  <header>

    <div id="topo">

      <div id="topo-logo">
        <h1>Loja Virtual</h1>
      </div>

      <div id="topo-login">
         <a href="login.php">
         <button type="button" value="Entre ou Cadastre-se" id="login">Entre ou Cadastre-se</button>
         </a>
      </div>

    </div>

    <div id="menu">

      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php">Empresa</a></li>
        <li><a href="paginaProdutos.php">Feminino</a></li>
        <li><a href="paginaProdutos.php">Masculino</a></li>
        <li><a href="paginaProdutos.php">Infantil</a></li>
        <li><a href="paginaProdutos.php">Casa</a></li>
        <li><a href="atendimento.php">Atendimento</a></li>
      </ul>

    </div>

  </header>

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

  <footer>

        <div id="container-footer">

            <div id="botoes-footer">

                <a href="">
                    <button>
                    <i class="fab fa-facebook"></i>
                    </button>
                </a>

                <a href="">
                    <button>
                <i class="fab fa-twitter"></i>
                    </button>
                </a>

                <a href="">
                    <button>
                <i class="fab fa-instagram"></i>
                    </button>
                </a>

                <a href="">
                    <button>
                <i class="fab fa-youtube"></i>
                    </button>
                </a>

            </div>

	 		<div id="endereco">
	 			<p>
	 			Rua XV de Novembro, 1299 | CEP 80.060-000 | Centro | Curitiba | PR | Brasil
	 			</p>
      </div>

   </footer>
</body>
</html>
