<html>
<head>
  <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
</head>
<body>
  <h1>Data Siswa</h1>
  <tr>
        
            <td bgcolor="blue"><h2> <a href="form_simpan.php">+Tambah Data </a><br><br></h2></td>
             
    </table>
  <table border="3" width="100%"><tr/>
  <tr>
    <th>Foto</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
 
  $query = "SELECT * FROM siswa"; 
  $sql = mysqli_query($connect, $query); 
 
  while($data = mysqli_fetch_array($sql)){ 
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
    echo "<td>".$data['nis']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td><a href='form_ubah.php?nis=".$data['nis']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>