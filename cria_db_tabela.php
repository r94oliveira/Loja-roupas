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
  descricao VARCHAR(600) NOT NULL,  
  preco DECIMAL(6,2) NOT NULL,
  imagem VARCHAR(100) NOT NULL,
  promocao BOOLEAN DEFAULT false
)";


if (mysqli_query($conn, $sql)) {
    echo "<br>Database criado com sucesos";
} else {
    echo "<br>Erro criando database: " . mysqli_error($conn);
}

    $sql = "INSERT INTO 
         $table (produto,preco,categoria,imagem,promocao,descricao)
         VALUES 

         ('Blusa Jeans', '89.90','feminino','img/produto1.jpg','1'),

         ('Pijama Short', '49.90','feminino','img/produto2.jpg','1'),

         ('Pijama Curto Preto', '69.90','masculino','img/produto3.jpg','1'),

         ('Pijama Longo Básico', '59.90','masculino','img/produto4.jpg','1'), 




         ('Blusão Moletom Cropped', '99.90','feminino','img/produto5.jpg','0'),

         ('Camisa Manga Longa', '99.90','masculino','img/produto6.jpg','0'),

         ('Parka Zíper Capuz', '159.90','feminino','img/produto7.jpg','0'),

         ('Camiseta Zíper Lateral', '49.90','masculino','img/produto8.jpg','0'), 




         ('Blusa Alças Recortes', '99.90','feminino','img/produto9.jpg','0'),

         ('Calça Jeans Slim', '99.90','masculino','img/produto10.jpg','0'),

         ('Calça Jogger Moletom', '119.90','feminino','img/produto11.jpg','0'),

         ('Camisa Casual Liocel', '119.90','masculino','img/produto12.jpg','0'),


         ('Camisa Casual Listrada', '119.90','masculino','img/produto13.jpg','0'),

         ('Camiseta Hello Kitt', '69.90','feminino','img/produto14.jpg','0'),

         ('Camiseta Malha Estampa', '59.90','masculino','img/produto15.jpg','0'),

         ('Vestido Curto Floral', '139.90','feminino','img/produto16.jpg','0') 


         ";

    if(!mysqli_query($conn,$sql)){
      die("Problemas para inserir novo produto no BD!<br>".
           mysqli_error($conn));
    }
  
mysqli_close($conn);

?>
