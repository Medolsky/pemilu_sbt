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
    <title>Sertifikat</title>

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- my CSS -->
    <link rel="stylesheet" href="sertifikat.css">

</head>
<body>

<h1>Daftar Sertifikat</h1>

 


  <form action="" method="post" align="center">

    <input type="text" name="keyword" size="25" autofocus placeholder="Masukan Keyword Pencarian.." autocomplete="off">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="cari">Cari</button>
    <a class="nav-item btn btn-danger tombol" href="index.php">Kembali</a>

  </form>




  <br>

<div class=""container>

  <div class="table-responsive-xl align="center">
  <table class="table">
  <thead class="thead-dark">
    <tr>
    <th>No.</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Divisi</th>
        <th>Sertifikat</th>
    </tr>
  </thead>

      <?php $i = 1; ?>
      <?php foreach( $sertifikat as $row ) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
          <a class="download nav-item btn btn-primary tombol" download="<?= $row["sertifikat"]; ?>" href="sertifikat/<?= $row["sertifikat"]; ?>">Download</a>
          </td>
          <td><?= $row["nama"]; ?></td>
          <td><?= $row["kelas"]; ?></td>
          <td><?= $row["divisi"]; ?></td>
          <td><?= $row["sertifikat"]; ?></td>
        </tr>
      <?php $i++; ?>
      <?php endforeach; ?>

  </table>
  </div>

 
</div>





 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>