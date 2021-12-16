<?php
require 'function.php';
//cek apakah tombol sudah dipencet
if(isset($_POST["submit"])){
  //cek apakah data berhasil masuk
  if(tambah($_POST)>0){
    echo "
    <script>
      alert('data berhasil ditambahkan!');
      document.location.href='index.php';
    </script>
    ";
  }else{
    echo "<script>
      alert('data gagal ditambahkan!');
    </script>";
  }

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Data Mahasiswa</title>
  </head>
  <body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
      <ul>
        <li>
          <label for="NIM">NIM: </label>
          <input type="text" name="NIM" value="" id="NIM" required>
        </li>
        <br>
        <li>
          <label for="Nama">Nama: </label>
          <input type="text" name="Nama" value="" id= "Nama" required>
        </li>
        <br>
        <li>
          <label for="Email">Email: </label>
          <input type="text" name="Email" value="" id="Email" required>
        </li>
        <br>
        <li>
          <label for="Jurusan">Jurusan: </label>
          <input type="text" name="Jurusan" value="" id="Jurusan" required>
        </li>
        <br>
        <li>
          <label for="Gambar">Gambar URL: </label>
          <input type="text" name="Gambar" value="" id="Gambar" required>
        </li>
        <br>
        <li>
          <button type="submit" name="submit">Tambah Data</button>
        </li>
      </ul>
    </form>
  </body>
</html>
