<?php
require "db_credentials_Login.php";

function connect_db(){
  global $servername, $username, $db_password, $dbname;
  $conn = mysqli_connect($servername, $username, $db_password, $dbname);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  return($conn);
}

function disconnect_db($conn){
  mysqli_close($conn);
}

?>
