<?php
  
$server = "localhost:82";
$user = "root";
$pass = "";
$database = "pemilusbt";
  
$conn = mysqli_connect($server, $user, $pass, $database);
  
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
  
?>