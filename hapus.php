<?php


require "function.php";
$NIM = number_format($_GET["NIM"]);
if(hapus($NIM)>0){
  echo "
  <script>
    alert('data berhasil dihapus!');
    document.location.href='index.php';
  </script>
  ";
}else{
  echo "
  <script>
    alert('data gagal dihapus!');
    document.location.href='index.php';
  </script>
  ";

}
 ?>
