<?php
require 'functions.php';
$sertifikat = query("SELECT * FROM sertifikat");

// jika tombol cari ditekan
  if ( isset($_POST["cari"]) ) {
    $sertifikat = cari($_POST["keyword"]);
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Sertifikat</h1>
<a href="tambah.php">Tambah Data Sertifikat</a>
<br><br>

<form action="" method="post">

  <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian.." autocomplete="off">
  <button type="submit" name="cari">Cari</button>

</form>


<br>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Divisi</th>
    <th>Sertifikat</th>
  
  </tr>

<?php $i = 1; ?>
<?php foreach( $sertifikat as $row ) : ?>
  <tr>
    <td><?= $i; ?></td>
    <td>
      <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
      <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Hapus Data?');">hapus</a>
    </td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["kelas"]; ?></td>
    <td><?= $row["divisi"]; ?></td>
    <td><?= $row["sertifikat"]; ?></td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>

</body>
</html>