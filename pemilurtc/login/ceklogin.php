<?php
// memanggil file koneksi.php
include "koneksi.php";
// membuat variable dengan nilai dari form
$username = $_POST['username'];
$password = $_POST['password'];
$perintah = "SELECT * from userrtc WHERE username = '$username' AND password = '$password'";
$hasil = mysqli_query($koneksi, $perintah);
$row = mysqli_fetch_array($hasil);


if ($row['username'] == $username AND $row['password'] == $password) {
session_start(); // memulai fungsi session
$_SESSION['username'] = $username;
header("location:berhasil.php"); // jika berhasil login, maka masuk ke file home.php
}
else {
echo "<a href='index.html'>Gagal Masuk Silahkan Coba Lagi</a>"; // jika gagal, maka muncul teks gagal masuk
}
?>