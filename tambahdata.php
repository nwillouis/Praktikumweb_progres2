<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TAMBAH DATA PEMESANAN</title>

    <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="bootstrap/css/sb-admin.css" rel="stylesheet">

  </head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <body>
    <h3 style="text-align: center; font-family: times;"> INPUTAN PEMESANAN </h3><hr>
     <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form action="input.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" name="NamaPemesan" placeholder="Nama Pemesan" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="AlamatPemesan" placeholder="Alamat Pemesan" required>
            </div> 
            <div class="form-group">
              <input type="number" min="0" max="99999999" class="form-control" name="NotelpPemesan" placeholder="Notelp Pemesan" required>
            </div>
           <div class="form-group">
              <input type="text" class="form-control" name="Destination" placeholder="Destination" required>
            </div> 
            <div class="form-group">
              <input type="text" class="form-control" name="Transportation" placeholder="Transportasi" required>
            </div> 
            <div class="form-group">
              <input type="text" class="form-control" name="Hotel" placeholder="Hotel" required>
            </div>
            <div class="form-group">
              <input type="file" name="photo" accept="image/*" required />
            </div>  
            <div class="form-group">
              <input type="submit" name="submit" value="Simpan" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
