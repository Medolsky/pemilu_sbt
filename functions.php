<?php 
// koneksi ke databse
$conn = mysqli_connect("localhost:82", "root", "", "pemilusbt");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}


// insert data
function tambah($data){
    global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $divisi = htmlspecialchars($data["divisi"]);

        // upload file
        $sertifikat = upload();
        if (!$sertifikat) {
            return false;
        }

    $query = "INSERT INTO sertifikat
                 VALUES
            ('', '$nama', '$kelas', '$divisi', '$sertifikat')
            ";

        mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

// upload file
function upload() {

    $namafile = $_FILES['sertifikat']['name'];
    $ukuranfile = $_FILES['sertifikat']['size'];
    $error = $_FILES['sertifikat']['error'];
    $tmpName = $_FILES['sertifikat']['tmp_name'];

    // cek apakah tidak ada file yg diupload
    if ( $error === 4) {
        echo "
            <script>
                alert('Masukan Gambar Terlebih Dahulu');
            </script>
        ";
        return false;
    }

    // cek apakah file benar
    $ekstensifilevalid = ['pdf', 'rar', 'zip'];
    $ekstensifile = explode('.', $namafile);
    $ekstensifile = strtolower(end($ekstensifile));

    if( !in_array($ekstensifile, $ekstensifilevalid) ) {
        echo "
            <script>
                alert('Ekstensi File Salah');
            </script>
        ";
        return false;
    }

    // cek ukuran file
    if ( $ukuranfile > 5000000 ) {
        echo "
            <script>
                alert('Ukuran File Terlalu Besar');
            </script>
            ";
         return false;
      }


    // file lolos pengecekan
    // generate nama file abru
    // $namafilebaru = uniqid();
    // $namafilebaru .= '.';
    // $namafilebaru .= $ekstensifile;
  
    move_uploaded_file($tmpName, 'sertifikat/' . $namafile);
    return $namafile;

}


// hapus data
function hapus($id) {

    global $conn;
    mysqli_query($conn, "DELETE FROM sertifikat WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}



// ubah data
function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $divisi = htmlspecialchars($data["divisi"]);
    $sertifikatlama = htmlspecialchars($data["sertifikatlama"]);

    

    // cek apakah user upload file baru
    if ($_FILES['sertifikat']['error'] === 4 ){
        $sertifikat = $sertifikatlama;
    } else {
        $sertifikat = upload();
    }

    

    $query = "UPDATE sertifikat SET
                nama = '$nama',
                kelas = '$kelas',
                divisi = '$divisi',
                sertifikat = '$sertifikat'
                WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


function cari($keyword) {
    $query = "SELECT * FROM sertifikat 
            WHERE
            nama LIKE '%$keyword%' OR
            kelas LIKE '%$keyword%' OR
            sertifikat LIKE '%$keyword%'

            ";   
       return query($query);     
}





?>