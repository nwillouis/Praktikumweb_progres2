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
          <form action="config/input.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="nama Pemesan" placeholder="Nama Pemesan">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="nama Pemesan" placeholder="Alamat Pemesan">
            </div> 
            <div class="form-group">
              <input type="number" min="0" max="99999999" class="form-control" name="notelp" placeholder="Notelp Pemesan">
            </div>
           <div class="form-group">
              <input type="text" class="form-control" name="destination" placeholder="Destination">
            </div> 
            <div class="form-group">
              <input type="text" class="form-control" name="transportasi" placeholder="TRANSPORTASI">
            </div> 
            <div class="form-group">
              <input type="text" class="form-control" name="hotel" placeholder="HOTEL">
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
