<?php
require 'db_credentials.php';
//$sql = "USE $dbname";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("A conexão com o banco de dados falhou: " . mysqli_connect_error());
} else { echo 'Conectado ao banco de dados com sucesso<br/>';  }

// Attempt delete query execution
$sql = "DELETE FROM $table";
$sql = "DROP TABLE $table";
if(mysqli_query($conn, $sql)){
    echo "Os registros foram deletados com sucesso.";
} else{
    echo "Não foi possível executar a solicitação corretamente > $sql" . mysqli_error($conn);
}

         mysqli_close($conn); 

?>
