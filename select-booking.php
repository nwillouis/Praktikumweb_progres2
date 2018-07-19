<<<<<<< HEAD
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
                <a style="margin-left: 400px;" href="tambahdata.php"><button type="button" name="button" class="btn btn-primary">Tambah Data Pemesanan</button></a>
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
                    <a class="nav-link" href="index.html">
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
          <div class="mb-0 mt-4">
              <hr class="my-0">
              <?php
  require 'koneksi.php';

  $que = mysqli_query($koneksi, "SELECT * FROM data_pemesan");

  if ($que) {
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID PEMESAN".'</td>';
    echo '<td>'."NAMA PEMESAN".'</td>';
    echo '<td>'."ALAMAT PEMESAN".'</td>';
    echo '<td>'."NO. TELP. PEMESAN".'</td>';
    echo '<td>'."DESTINATION".'</td>';
    echo '<td>'."TRANSPORTATION".'</td>';
    echo '<td>'."HOTEL".'</td>';
    echo '</tr>';
    echo '<thead>';
    while ($row = mysqli_fetch_assoc($que)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$row["id_pemesan"].'</td>';
      echo '<td>'.$row["NamaPemesan"].'</td>';
      echo '<td>'.$row["AlamatPemesan"].'</td>';
      echo '<td>'.$row["NotelpPemesan"].'</td>';
      echo '<td>'.$row["Destination"].'</td>';
      echo '<td>'.$row["Transportation"].'</td>';
      echo '<td>'.$row["Hotel"].'</td>';
      echo '</tr>';
      echo '</tbody>';
    }
    echo '</table>';
    echo '</div>';
    }
  
?>
            </div>
          </div>
</body>
</html>