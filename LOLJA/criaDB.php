<?php

require 'db_credentials.php';

class criaDB{
  public $servername;
  public $username;
  public $password;
  public $dbname;
  public $tablename;
  public $con;

  public function __construct($dbname,$tablename,$servername,$username,$password){

    $this->dbname = $dbname;
    $this->tablename = $tablename;
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;

    $this->con = mysqli_connect($servername,$username,$password);

    if(!$this->con){
      die("Erro de conecção:".mysqli_connect_error());
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($this->con, $sql)){
      $this->con = mysqli_connect($servername,$username,$password,$dbname);
      $sql = "CREATE TABLE IF NOT EXISTS $tablename(
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                produto VARCHAR(100) NOT NULL,
                categoria VARCHAR(100) NOT NULL,
                preco DECIMAL(6,2) NOT NULL,
                imagem VARCHAR(100) NOT NULL,
                promocao BOOLEAN DEFAULT false
              )";
      if(!mysqli_query($this->con,$sql)){
        echo "Erro ao criar tabela:".mysqli_error($this->con);
      }else{
        $sql = "INSERT INTO $tablename (produto,preco,categoria,imagem,promocao) VALUES
                ('Blusa Jeans', '89.90','Feminino','img/produto1.jpg','1'),
                ('Pijama Short', '49,90', 'Feminino', 'img/produto2.jpg', '2'),
                ('Pijama Longo (Preto)', '69,90', 'Masculino', 'img/produto3.jpg', '3'),
                ('Pijama Longo (Básico)', '59,90', 'Masculino', 'img/produto4.jpg', '4')";

        if(!mysqli_query($conn,$sql)){
          die("Problemas para inserir novo produto no BD!<br>".
               mysqli_error($conn));
        }
      }
    }
    else{
      return false;
    }
  }
  public function getData(){
    $sql = "SELECT * FROM $this->tablename";
    $result = mysqli_query($this->con,$sql);
      if(mysqli_num_rows($result) > 0){
        return $result;
      }
  }

}

mysqli_close(mysqli_connect($servername,$username,$password));

?>
