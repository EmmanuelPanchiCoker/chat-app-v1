<?php
  $hostname = "https://emmanuelpanchicoker.github.io/chat-app-v1/";
  $username = "root";
  $password = "";
  $dbname = "chat-app-v1";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".EPC-Code;
  }
?>
