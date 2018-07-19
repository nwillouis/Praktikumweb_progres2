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
            <i class="fa fa-newspaper-o"></i> Best Destination </div>
          <hr class="mt-2">
          <div class="card-columns">
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="img/rajaampat.jpg" width="500" height="250">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Raja Ampat </a></h6>
                <p class="card-text small">
Kepulauan Raja Ampat

Panorama
Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung (Vogelkoop) Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat. Kepulauan ini sekarang menjadi tujuan para penyelam yang tertarik akan keindahan pemandangan bawah lautnya. Empat gugusan pulau yang menjadi anggotanya dinamakan menurut empat pulau terbesarnya, yaitu Pulau Waigeo, Pulau Misool, Pulau Salawati, dan Pulau Batanta.
                </p>
                  <a href="#">#rajaampat</a>
                  <a href="#">#water</a>
                  <a href="#">#indonesia</a>
                  <a href="#">#alamindonesia</a>
                  <a href="#">#pesonaindonesia</a>
                  <a href="#">#cintaindonesia</a>
                </div>
              <hr class="my-0">
              <div class="card-footer small text-muted">Posted 32 mins ago</div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="img/bromo.jpg" width="500" height="250">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Bromo</a></h6>
                <p class="card-text small">Gunung Bromo adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.
                  <a href="#">#bromotenggersemeru</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-footer small text-muted">Posted 46 mins ago</div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="img/rinjani.jpg" width="500" height="200">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Gunung Rinjani</a></h6>
                <p class="card-text small">Gunung Rinjani adalah gunung yang berlokasi di Pulau Lombok, Nusa Tenggara Barat. Gunung yang merupakan gunung berapi kedua tertinggi di Indonesia dengan ketinggian 3.726 m dpl serta terletak pada lintang 8º25' LS dan 116º28' BT ini merupakan gunung favorit bagi pendaki Indonesia karena keindahan pemandangannya. Gunung ini merupakan bagian dari Taman Nasional Gunung Rinjani yang memiliki luas sekitar 41.330 ha dan ini akan diusulkan penambahannya sehingga menjadi 76.000 ha ke arah barat dan timur.
                  <a href="#">#rinjanimountain</a>
                  <a href="#">#pendakirinjani</a>
                  <a href="#">#indonesia</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-footer small text-muted">Posted 1 hr ago</div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="img/semeru.jpg" width="500" height="250">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Gunung Semeru</a></h6>
                <p class="card-text small">Gunung Semeru atau Gunung Meru adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia. Gunung Semeru merupakan gunung tertinggi di Pulau Jawa, dengan puncaknya Mahameru, 3.676 meter dari permukaan laut (mdpl). Gunung Semeru juga merupakan gunung berapi tertinggi ketiga di Indonesia setelah Gunung Kerinci di Sumatera dan Gunung Rinjani di Nusa Tenggara Barat[1]. Kawah di puncak Gunung Semeru dikenal dengan nama Jonggring Saloko. Gunung Semeru secara administratif termasuk dalam wilayah dua kabupaten, yakni Kabupaten Malang dan Kabupaten Lumajang, Provinsi Jawa Timur. Gunung ini termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.
                  <a href="#">#semeru</a>
                  <a href="#">#semerumountain</a>
                  <a href="#">#gunungsemeru</a>
                  <a href="#">#buntuadventure</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-footer small text-muted">Posted yesterday</div>
            </div>
          </div>
</body>

</html>