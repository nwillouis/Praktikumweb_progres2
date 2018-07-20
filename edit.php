<!DOCTYPE html>
<html>

<head>
    <title>Update</title>
    <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="bootstrap/css/sb-admin.css" rel="stylesheet">
</head>

<body>

    <br/>


    <?php
    require_once 'koneksi.php';
    $d=$_GET['d'];
    $con=mysqli_query($koneksi, "SELECT*FROM data_pemesan where id_pemesan='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
    <form action="update.php" method="post">

        <h3 style="text-align: center; font-family: times;"> EDIT PEMESANAN </h3>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="input.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="id_pemesan" value="<?php echo $data['id_pemesan']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="NamaPemesan" value="<?php echo $data['NamaPemesan'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="AlamatPemesan" value="<?php echo $data['AlamatPemesan'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="number" min="0" max="99999999" class="form-control" value="<?php echo $data['NotelpPemesan'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Destination" value="<?php echo $data['Destination'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Transportation" value="<?php echo $data['Transportation'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Hotel" value="<?php echo $data['Hotel'] ?>">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Simpan" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </form>
    <?php } ?>
</body>

</html>