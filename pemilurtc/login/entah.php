 <?php
 // memanggil file koneksi.php
 include "koneksi.php";
 // membuat variable dengan nilai dari form
 $username = $_POST['username'];
 $jabatan = $_POST['jabatan'];
 $password = $_POST['password'];
 $daftar = mysql_query("INSERT INTO login (username,jabatan,password) values ('$username','$jabatan','$password')");
 if ($daftar){
 echo "<script>alert('Berhasil Mendaftar')</script>";
 echo "<meta http-equiv='refresh' content='1 url=index.html'>";
 }else{
 echo "<script>alert('Gagal Mendaftar')</script>";
 echo "<meta http-equiv='refresh' content='1 url=index.html'>";
 }
 ?>