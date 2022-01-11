 <?php
 // memanggil file koneksi.php
 include "koneksi.php";
 // membuat variable dengan nilai dari form
 $username = $_POST['username'];
 $yangdipilih = $_POST['yangdipilih'];
 $pilih = "INSERT INTO hasilpemilihanrtc (username,yangdipilih) values ('$username','$yangdipilih')";
 $daftar = mysqli_query($koneksi, $pilih);
 if ($daftar){
    echo "<script>alert('Terima kasih telah mengikuti pemilihan calon ketua RTC!')</script>";
    echo "<meta http-equiv='refresh' content='1 url=logout.php'>";
 }else{
    echo "<script>alert('Anda tidak dapat mengikuti pemilihan karena anda sudah memilih!')</script>";
    echo "<meta http-equiv='refresh' content='1 url=berhasil.php'>";
 }
 ?>