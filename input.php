<?php
  require_once 'koneksi.php';

  $NamaPemesan=$_POST['NamaPemesan'];
  $AlamatPemesan=$_POST['AlamatPemesan'];
  $NotelpPemesan=$_POST['NotelpPemesan'];
  $Destination=$_POST['Destination'];
  $Transportation=$_POST['Transportation'];
  $Hotel=$_POST['Hotel'];

  if ($NamaPemesan==null || $AlamatPemesan==null || $NotelpPemesan==null || $Destination==null || $Transportation==null || $Hotel==null) {
    echo "<script>alert('silahkan lengkapi data');window.location='tambahdata.php'</script>";
  }else {
    $con= mysqli_query($koneksi, "INSERT INTO data_pemesan (NamaPemesan, AlamatPemesan, NotelpPemesan, Destination, Transportation, Hotel)
    values ('$NamaPemesan', '$AlamatPemesan', '$NotelpPemesan','$Destination', '$Transportation', '$Hotel')");
    echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='index.php'</script>";
  }
 ?>
