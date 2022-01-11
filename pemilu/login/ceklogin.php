<?php
// memanggil file koneksi.php
include "koneksi.php";
// membuat variable dengan nilai dari form
$username = $_POST['username'];
$password = $_POST['password'];
$perintah = "SELECT * from user WHERE username = '$username' AND password = '$password'";
$hasil = mysqli_query($koneksi, $perintah);
$row = mysqli_fetch_array($hasil);


if ($row['username'] == $username AND $row['password'] == $password) {
session_start();
$_SESSION['username'] = $username;
header("location:berhasil.php");
} 
else {
echo "<a href='index.html'>Gagal Masuk Silahkan Coba Lagi</a>";
}
?>