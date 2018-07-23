<?php
require_once "koneksi.php";

$reset=mysqli_query($koneksi,"TRUNCATE data_pemesan");

if ($reset) {
  echo "<script>alert('data berhasil direset');window.location='select-booking.php'</script>";
}else {
  echo "<script>alert('data gagal di reset');window.location='select-booking.php'</script>";
}
 ?>
