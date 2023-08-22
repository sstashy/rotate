<?php
$servername = "localhost";
$username = "root";
$password = "";

//CODED BY ANGER!S :) SHİVASTEAM <3

try {
  $conn = new PDO("mysql:host=$servername;dbname=shivaschecker;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>