<?php
function verifica_campo($texto){
  $texto = trim($texto);
  $texto = stripslashes($texto);
  $texto = htmlspecialchars($texto);
  return $texto;
}

$nome = $email = $data = $senha = $Csenha = $imagem = "";
$erro = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

//------------- NOME

  if(empty($_POST["nome"])){
    $erro_nome = "Nome é obrigatório.";
    $erro = true;
  }
  else{
    $nome = verifica_campo($_POST["nome"]);
  }

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

//------------- DATA

  if(empty($_POST["data"])){
    $erro_data = "Data é obrigatório.";
    $erro = true;
  }
  else{
    $data = verifica_campo($_POST["data"]);
  }

//------------- SENHA

  if(empty($_POST["senha"])){
    $erro_senha = "Senha é obrigatório.";
    $erro = true;
  }
  else{
    $senha = verifica_campo($_POST["senha"]);
  }

//------------- CONFIRMA SENHA

  if(empty($_POST["Csenha"])){
    $erro_Csenha = "Confirmação de senha é obrigatório.";
    $erro = true;
  }
  else{
    $Csenha = verifica_campo($_POST["Csenha"]);
  }

//------------- SENHA VS CONFIRMA SENHA

  if ($senha != $Csenha) {
    $erro_Csenha = "Senha e confirmação de senha devem ser iguais.";
    $erro = true;

    $erro_senha = "Senha e confirmação de senha devem ser iguais.";
    $erro = true;
  }

//------------- IMAGEM - HANDLE

  if(empty($_POST["imagem"])){
    $erro_imagem = "Imagem é obrigatório.";
    $erro = true;
  }
  else{
    $imagem = verifica_campo($_POST["imagem"]);
  }

$target_dir = "imagens/";
$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imagem"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

if ($_FILES["imagem"]["size"] > 1024000) {
    $erro_imagem = "A imagem deve ter no máximo 1MB.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png") {
    $erro_imagem = "É permitido apenas imagens JPG e PNG.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    $erro_imagem = $erro_imagem." O upload da imagem não foi feito.";;

} else {
  if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
    $erro_imagem = "";
    $erro = false;
    $imagem = verifica_campo(basename( $_FILES["imagem"]["name"]));

  } else {
    echo "Ocorreu algum erro no upload.";

  }
}

}
?>



<?php


// Check if image file is a actual image or fake image


// Check file size


// Allow certain file formats


// Check if $uploadOk is set to 0 by an error

?>
