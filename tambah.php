<?php
require 'functions.php';

if( isset($_POST["submit"]) ) {

    // cek data berhasil ditambah atau tidak
    if( tambah($_POST) > 0){
        echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambahkan');
        document.location.href = 'admin.php';
    </script>";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Sertifikat</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>    
            </li>
            <li>
                <label for="kelas">Kelas : </label>
                <input type="text" name="kelas" id="kelas" required>
            </li>
            <li><label for="divisi">Divisi : </label>
                <input type="text" name="divisi" id="divisi" required>
            </li>
            <li>
                <label for="sertifikat">Sertifikat : </label>
                <input type="file" name="sertifikat" id="sertifikat" >
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        
        
        </ul>
    
    
    </form>





</body>
</html>