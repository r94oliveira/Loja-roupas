<!DOCTYPE html>
<html>
  <head>
    <?php include "Head.php"; ?>
   <title>Forma de pagamento</title>
  </head>
<body>
  <?php include "header.php" ?>
  <hl>"Escolha a forma de pagamento"</hl>
  <br><br>
  <form action="http://web1-app.tadsufpr.net.br/test/form" method="post">
    <input type="radio" name="Cartão de" checked value="Crédito">
    <label for="Crédito">Cartão de crédito</label><br>
    <input type="radio" name="Cartão de" value="Débito">
    <label for "Débito">Cartão de débito</label><br><br>
    <img src="Pictures/visa.png" alt="Visa logo" style="width:80px;hight:80px;"></img><br>
    <input type="radio" name="Operadora" value="Visa">
    <label for="Visa">Visa</label><br><br>
    <img src="Pictures/MC.png" alt="MasterCard logo" style="width:80px;hight:80px;"></img><br>
    <input type="radio" name="Operadora" value="MasterCard">
    <label for="MasterCard">Mastercard</label><br><br>
    <img src="Pictures/elo.jpg" alt="elo logo" style="width:50px;hight:50px;"></img><br>
    <input type="radio" name="Operadora" value="elo">
    <label for="elo">elo</label><br><br>
    <img src="Pictures/aura.png" alt="Aura logo" style="width:100px;hight:100px;"></img><br>
    <input type="radio" name="Operadora" value="Aura">
    <label for="Aura">Aura</label><br><br>
    <img src="Pictures/HC.jpg" alt="Hipercard logo" style="width:120px;hight:120px;"></img><br>
    <input type="radio" name="Operadora" value="Hipercard">
    <label for="Hipercardc">Hipercard</label><br><br>
    <label for "numcard">Número do cartão</label><br>
    <input type="text" name="numcard" value=><br><br>
    <div id="confirm-compra">
       <button id="botaoComprar" type="button" value="Efetuar compra">Efetuar compra</button>
    </div>
  </form>
    <?php include "footer.php"; ?>
</body>
</html>
