<?php
//koneksi ke database
require 'function.php';
//ambil data
$mahasiswa = query("SELECT*FROM mahasiswa");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Page</title>
  </head>
  <body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>
      <?php
      $i = 1;
       foreach($mahasiswa as $row): ?>
      <tr>
        <td><?php echo$i; ?></td>
        <td>
          <a href="">Ubah</a> |
          <a href="hapus.php?NIM=<?php echo($row["NIM"]);?> " onclick="return confirm('Yakin?');">Hapus</a>
        </td>
        <td><img src="images/<?php echo$row["Gambar"];?>" width="50"></td>
        <td><?php echo$row["NIM"];?></td>
        <td><?php echo$row["Nama"];?></td>
        <td><?php echo$row["Email"];?></td>
        <td><?php echo$row["Jurusan"];?></td>
      </tr>
    <?php
    $i++;
  endforeach; ?>
    </table>
  </body>
</html>
