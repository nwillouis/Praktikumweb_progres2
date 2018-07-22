  <?php
require_once "koneksi.php";

$id_pemesan = $_POST['id_pemesan'];
$NamaPemesan = $_POST['NamaPemesan'];
$AlamatPemesan = $_POST['AlamatPemesan'];
$NotelpPemesan = $_POST['NotelpPemesan'];
$Destination = $_POST['Destination'];
$Transportation = $_POST['Transportation'];
$Hotel = $_POST['Hotel'];

  $up=mysqli_query($koneksi, "UPDATE data_pemesan SET id_pemesan='$id_pemesan', NamaPemesan='$NamaPemesan', AlamatPemesan='$AlamatPemesan', NotelpPemesan='$NotelpPemesan', Destination='$Destination', Transportation='$Transportation', Hotel='$Hotel'  where id_pemesan='$id_pemesan'");
  if ($up) {
    echo "<script>alert('terima kasih, data berhasil di edit');window.location='select-booking.php'</script>";
  }else {
    echo "<script>alert('maaf, data gagal diedit');window.location='select-booking.php'</script>";
  }
 ?>
