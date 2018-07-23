<?php
  require_once 'koneksi.php';

  $id_pemesan=$_POST['id_pemesan'];
  $NamaPemesan=$_POST['NamaPemesan'];
  $AlamatPemesan=$_POST['AlamatPemesan'];
  $NotelpPemesan=$_POST['NotelpPemesan'];
  $Destination=$_POST['Destination'];
  $Transportation=$_POST['Transportation'];
  $Hotel=$_POST['Hotel'];
  $photo  = $_FILES['photo']['name'];
  $targetfolder = "img/".basename($photo);

  if (  $NamaPemesan==null || $AlamatPemesan==null || $NotelpPemesan==null || $Destination==null || $Transportation==null || $Hotel==null) {
    echo "<script>alert('silahkan lengkapi data');window.location='tambahdata.php'</script>";
  }else {
    $con= mysqli_query($koneksi, "INSERT INTO data_pemesan (NamaPemesan, AlamatPemesan, NotelpPemesan, Destination, Transportation, Hotel, photo)
    values ('$NamaPemesan', '$AlamatPemesan', '$NotelpPemesan','$Destination', '$Transportation', '$Hotel' ,'$photo')");
    if ($con && move_uploaded_file($_FILES['photo']['tmp_name'], $targetfolder)) {
    echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='select-booking.php'</script>";
      }   
  }
 ?>
