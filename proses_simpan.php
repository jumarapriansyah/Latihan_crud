<?php

include "koneksi.php";


$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Set path folder tempat menyimpan fotonya
$path = "images/".$foto;

// Proses upload
if(move_uploaded_file($tmp, $path)){ 
  $query = "INSERT INTO siswa VALUES('".$nis."', '".$nama."', '".$jenis_kelamin."', '".$telp."', '".$alamat."', '".$foto."')";
  $sql = mysqli_query($connect, $query); 
  if($sql){ 
    header("location: index.php"); 
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>