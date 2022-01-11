<title>Hasil Calon Pemilihan Ketua SBT 2017-2018</title>
 
 <?php
	$host = 'fdb28.awardspace.net';
	$user = '3513504_rtc';
	$pass = 'rtcsmknasional12';
	$db = '3513504_rtc';

	$conn = mysqli_connect($host, $user, $pass, $db);

	// isikan dengan nama database yang akan di hubungkan
  $db = mysqli_select_db($conn, $db);
  
  $result1 = mysqli_query($conn, "SELECT * FROM hasilpemilihan WHERE yangdipilih like '%nomor urut 1%' ");
  $num_rows1 = mysqli_num_rows($result1);
  
  $result2 = mysqli_query($conn, "SELECT * FROM hasilpemilihan WHERE yangdipilih like '%nomor urut 2%' ");
  $num_rows2 = mysqli_num_rows($result2);

  $result3 = mysqli_query($conn, "SELECT * FROM hasilpemilihan WHERE yangdipilih like '%nomor urut 3%' ");
  $num_rows3 = mysqli_num_rows($result3);

  $result4 = mysqli_query($conn, "SELECT * FROM hasilpemilihan WHERE yangdipilih like '%nomor urut 4%' ");
  $num_rows4 = mysqli_num_rows($result4);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Calon Pemilihan Ketua SBT 2017-2018</title>

<!-- css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="hasil.css">

</head>
<body>
    <table class="table">
      <tr>
        <td>Pasangan No Urut</td>
        <td>Jumlah Suara</td> 
      </tr>
      <tr>
        <td>Pasangan No.1</td>
        <td><?= $num_rows1; ?></td>  
      </tr>
      <tr>
        <td>Pasangan No.2</td>
        <td><?= $num_rows2 ?></td>  
      </tr>
      <tr>
        <td>Pasangan No.3</td>
        <td><?= $num_rows3 ?></td>  
      </tr>
      <tr>
        <td>Pasangan No.4</td>
        <td><?= $num_rows4 ?></td>  
      </tr>
    </table>




</body>
</html>