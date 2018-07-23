<!DOCTYPE html>
<html>

<head>
    <title>TRAVEL</title>

    <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="bootstrap/css/sb-admin.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.html"><img src="img/logo.jpg"></a>

        <form>
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for...">
                <span class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="BERANDA">
                    <a class="nav-link" href="index.php">
                        <i class="fa fa-home"></i>
                        <span class="nav-link-text">BERANDA</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="DESTINATION">
                    <a class="nav-link" href="Destination.php">
                        <i class="fa fa-globe"></i>
                        <span class="nav-link-text">DESTINATION</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="TYPE TRANSPORTASION">
                    <a class="nav-link" href="transportation.php">
                        <i class="fa fa-plane"></i>
                        <span class="nav-link-text">TYPE TRANSPORTASION</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="HOTEL">
                    <a class="nav-link" href="index.html">
                        <i class="fa fa-bed"></i>
                        <span class="nav-link-text">HOTEL</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="BOOKING">
                    <a class="nav-link" href="index.html">
                        <i class="fa fa-handshake-o"></i>
                        <span class="nav-link-text">BOOKING</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="TICKET">
                    <a class="nav-link" href="index.html">
                        <i class="fa fa-ticket"></i>
                        <span class="nav-link-text">TICKET</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="BOOKING CHECK">
                    <a class="nav-link" href="index.html">
                        <i class="fa fa-tag"></i>
                        <span class="nav-link-text">BOOKING CHECK</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-star"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">My Dashboard</li>
            </ol>

            <!-- Card Columns Example Social Feed-->
            <div class="container">

                <i class="fa fa-tag"></i>Booking Check</div>
            <hr class="mt-2">
            <form action="reset.php" method="post">
                <a href="tambahdata.php"><button type="button" name="button" class="btn btn-primary">Tambah Data Pemesanan</button></a>
                <input type="submit" name="submit" class="btn btn-danger" value="Reset">
            </form>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <td>ID Pemesan</td>
                                <td>Nama Pemesan</td>
                                <td>Alamat Pemesan</td>
                                <td>No Telp</td>
                                <td>Destination</td>
                                <td>Transportasion</td>
                                <td>Hotel</td>
                                <td>Photo</td>
                                <td colspan="2">Aksi</td>
                            </tr>
                            <?php

                  require_once 'koneksi.php';
                  $con=mysqli_query($koneksi, "SELECT * FROM data_pemesan");
                  while ($data =mysqli_fetch_array($con)) { 
                  ?>

                            <tr>
                                <td>
                                    <?php echo $data['id_pemesan'];?>
                                </td>
                                <td>
                                    <?php echo $data['NamaPemesan'];?>
                                </td>
                                <td>
                                    <?php echo $data['AlamatPemesan'];?>
                                </td>
                                <td>
                                    <?php echo $data['NotelpPemesan'];?>
                                </td>
                                <td>
                                    <?php echo $data['Destination'];?>
                                </td>
                                <td>
                                    <?php echo $data['Transportation'];?>
                                </td>
                                <td>
                                    <?php echo $data['Hotel'];?>
                                </td>
                                <td>    
                                    <img src="img/<?php echo $data['photo'] ?>">
                                </td>
                                <td><a href="delete.php?d=<?php echo $data['id_pemesan']; ?>"><i class="fa fa-trash"></i></a></td>
                                <td><a href="edit.php?d=<?php echo $data['id_pemesan']; ?>"><i class="fa fa-pencil-square"></i></a></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>
</body>

</html>