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
        <a class="navbar-brand" href="index.php"><img src="img/logo.jpg"></a>

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
                    <a class="nav-link" href="hotel.php">
                        <i class="fa fa-bed"></i>
                        <span class="nav-link-text">HOTEL</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="BOOKING">
                    <a class="nav-link" href="booking.php">
                        <i class="fa fa-handshake-o"></i>
                        <span class="nav-link-text">BOOKING</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="TICKET">
                    <a class="nav-link" href="tiket.php">
                        <i class="fa fa-ticket"></i>
                        <span class="nav-link-text">TICKET</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="BOOKING CHECK">
                    <a class="nav-link" href="select-booking.php">
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
            <i class="fa fa-globe"></i> Promo Ticket </div>
          <hr class="mt-2">
          <div class="card-columns">
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="pesawatpromo.PNG" width="500" height="250">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Promo Pesawat Gajian </a></h6>
                <div>
                	Periode Promo :
                </div>
                <div>
                	24 - 31 Juli 2018
                </div>
                <p class="card-text small">
                	Udah gajian, saatnya jalan-jalan!
Berkah gajian, beli tiket pesawat pasti diskon!
Pekan gajian itu emang selalu bikin pengen hura-hura.
Tapi, daripada hura-hura gak jelas, mendingan jalan-jalan dan jelajah tempat baru.
Nikmati diskon tiket pesawat murah ke mana pun, hingga Rp 125.000.
Bagi kamu pemilik kartu kredit BCA, HSBC, OCBC NISP, Permata Bank, Standard Chartered, UOB, CIMB Niaga, Citibank, BRI, Panin Bank, BNI, dan Bank Mandiri, semua bisa dicicil 0%
                </p>
               
                </div>
              <hr class="my-0">
              <div class="card-footer small text-muted"> <a href="https://www.tiket.com/promo/promo-pesawat"><button  type="button" class="btn btn-primary btn-lg btn-block">Detail Promo</button></a></div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="hotelpromo.PNG" width="500" height="250">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Promo Gajian Hotel</a></h6>
                <div>
                	Periode Promo :
                </div>
                <div>
                	1 - 10 November 2018<div class="footer">
                 </div>
                </div>
                <p class="card-text small">Gajian udah masuk dompet, bingung buat apa?

Staycation di hotel aja!

Pekan gajian tiba, saatnya jalan-jalan.

Staycation di hotel bareng sahabat juga seru.

Apalagi ada diskon hotel hingga  Rp 1,5 juta di semua hotel favoritmu.

Bagi kamu pemilik kartu kredit BCA, HSBC, OCBC NISP, Permata Bank, Standard Chartered, UOB, CIMB Niaga, Citibank, BRI, Panin Bank, BNI, dan Bank Mandiri, semua bisa dicicil 0%
                </p>
                
              </div>
              <hr class="my-0">
              <div class="card-footer small text-muted"><a href="https://www.tiket.com/promo/gajian-booking-hotel-murah"><button  type="button" class="btn btn-primary btn-lg btn-block">Detail Promo</button></a></div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="liburanpromo.PNG" width="500" height="200">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Promo Liburan Ke Luar Negeri</a></h6>
                <div>
                	Periode Promo :
                </div>
                <div>
                	17 - 31 Agustus 2018
                </div>
                <p class="card-text small">
                Mau liburan bareng teman terdekatmu keliling dunia? Bisa banget!

Dapatkan diskon tiket pesawat rute internasional hingga Rp 400.000

Bagi kamu pemilik kartu kredit BCA, HSBC, OCBC NISP, Permata Bank, Standard Chartered, UOB, CIMB Niaga, Citibank, BRI, Panin Bank, BNI, dan Bank Mandiri, semua bisa dicicil 0% juga loh

Kurang apa lagi? Yuk ciptakan kebahagiaan bersama, ajak temanmu keliling dunia, ke mana pun.                </p>
               
              </div>
              <hr class="my-0">
              <div class="card-footer small text-muted"><a href="https://www.tiket.com/promo/promo-penerbangan-internasional"> <button  type="button" class="btn btn-primary btn-lg btn-block">Detail Promo</button></a></div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="keretapromo.PNG" width="500" height="250">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Promo Kereta Liburan</a></h6>
                <div>
                	Periode Promo :
                </div>
                <div>
                	8 - 17 September 2018
                </div>
                <p class="card-text small">Mau liburan ke mana? Naik kereta bikin irit!

Beli tiket kereta api semua rute kapanpun, ke mana pun, diskon Rp 20.000.

Jalan-jalan dan seru-seruan bareng teman terdekat jadi makin hemat.
                </p>
                
              </div>
              <hr class="my-0">
              <div class="card-footer small text-muted"><a href="https://www.tiket.com/promo/promo-kereta-api"><button  type="button" class="btn btn-primary btn-lg btn-block">Detail Promo</button></a></div>
            </div>
          </div>
</body>
</html>