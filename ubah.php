<?php
require 'functions.php';


// ambil data di url
$id = $_GET["id"];
// query(mengambil) data mahasiswa berdasarkan id
$serti = query("SELECT * FROM sertifikat WHERE id = $id")[0];



// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek data berhasil diubah atau tidak
    if( ubah($_POST) > 0){
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
        alert('data gagal diubah!');
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
    <title>Update Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Sertifikat</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $serti["id"]; ?>">
        <input type="hidden" name="sertifikatlama" value="<?= $serti["sertifikat"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $serti["nama"]; ?>">    
            </li>
            <li>
                <label for="kelas">Kelas : </label>
                <input type="text" name="kelas" id="kelas" required value="<?= $serti["kelas"]; ?>">
            </li>
            <li><label for="divisi">Divisi : </label>
                <input type="text" name="divisi" id="divisi" required value="<?= $serti["divisi"]; ?>">
            </li>
            <li>
                <label for="sertifikat">Sertifikat : </label>
                <input type="file" name="sertifikat" id="sertifikat">
            </li>

            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        
        
        </ul>
    
    
    </form>





</body>
</html>