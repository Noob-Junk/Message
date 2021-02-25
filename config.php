<?php
  $hostname = "localhost";
  $username = "id16242322_splakabase";
  $password = "TCV=\]-ah]R3u>{M";
  $dbname = "id16242322_splakadern";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
