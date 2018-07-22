<?php
  require_once 'koneksi.php';

  $id_pemesan=$_POST['id_pemesan'];
  $NamaPemesan=$_POST['NamaPemesan'];
  $AlamatPemesan=$_POST['AlamatPemesan'];
  $NotelpPemesan=$_POST['NotelpPemesan'];
  $Destination=$_POST['Destination'];
  $Transportation=$_POST['Transportation'];
  $Hotel=$_POST['Hotel'];

  if ( $id_pemesan==null || $NamaPemesan==null || $AlamatPemesan==null || $NotelpPemesan==null || $Destination==null || $Transportation==null || $Hotel==null) {
    echo "<script>alert('silahkan lengkapi data');window.location='tambahdata.php'</script>";
  }else {
    $con= mysqli_query($koneksi, "INSERT INTO data_pemesan (id_pemesan, NamaPemesan, AlamatPemesan, NotelpPemesan, Destination, Transportation, Hotel)
    values ('$id_pemesan', '$NamaPemesan', '$AlamatPemesan', '$NotelpPemesan','$Destination', '$Transportation', '$Hotel')");
    echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='select-booking.php'</script>";
  }
 ?>
