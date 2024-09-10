<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notatki";
$polaczenie = new mysqli($servername, $username, $password, $dbname);
if ($polaczenie -> connect_errno) {
  echo "Failed to connect to MySQL: " . $polaczenie -> connect_error;
  exit();
}

?>
