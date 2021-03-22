<?php
require 'db_credentials.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully<br>";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

// Choose database
$sql = "USE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database changed";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

// sql to create table
$sql = "CREATE TABLE $table (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  produto VARCHAR(100) NOT NULL,
  categoria VARCHAR(100) NOT NULL,
  preco DECIMAL(6,2) NOT NULL,
  imagem VARCHAR(100) NOT NULL,
  promocao BOOLEAN DEFAULT false
)";


if (mysqli_query($conn, $sql)) {
    echo "<br>Database criado com sucesos";
} else {
    echo "<br>Erro criando database: " . mysqli_error($conn);
}

    $sql = "INSERT INTO $table (produto,preco,categoria,imagem,promocao)
            VALUES ('Blusa Jeans', '89.90','feminino','img/produto1.jpg','1')";
    if(!mysqli_query($conn,$sql)){
      die("Problemas para inserir novo produto no BD!<br>".
           mysqli_error($conn));
    }
    

/*

    $sql = "INSERT INTO $table (produto,preco,categoria,imagem,promocao)
            VALUES ('Blusa Jeans', '89.90','feminino','img/produto1.jpg','1')";


$sql = "INSERT INTO test11
        (produto,categoria,preco,imagem)
        VALUES
        ('Blusa Jeans','feminino','','R$ 89,90','img/produto1.jpg')";

  $nomeProduto=array('','Pijama Short','Pijama Curto Preto','Pijama Longo Básico');
  $precoProduto=array('','R$49,90','R$69,90','R$59,90');
        
*/


mysqli_close($conn);

?>




?>
