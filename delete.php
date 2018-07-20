<?php
require_once 'koneksi.php';

$d=$_GET['d'];

$con=mysqli_query($koneksi, "delete from data_pemesan where id_pemesan='$d'");
if ($con) {
  echo "<script>alert('data berhasil dihapus');window.location='select-booking.php'</script>";
}else {
  echo "<script>alert('gagal menghapus data');window.location='select-booking.php'</script>";
}
 ?>
