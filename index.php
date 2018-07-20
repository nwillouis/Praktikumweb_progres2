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
      <ul class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ul>
      <!-- Icon Cards-->
      <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img src="img/bgpantai.jpg" width="1000" height="500">
              </div>
            </div>
            </div>
          </div>

      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
              <center><img src="img/carlton.png" alt="Flowers in Chania" width="100" height="60"></center>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
              <center><img src="img/curtis.png" alt="Flowers in Chania" width="100" height="60"></center>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
               <center><img src="img/four.png" alt="Flowers in Chania" width="100" height="60"></center>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
              <center><img src="img/W.png" alt="Flowers in Chania" width="100" height="60"></center>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light1", // "light2", "dark1", "dark2"
    animationEnabled: false, // change to true      
    title:{
        text: "Best Destination"
    },
    data: [
    {
        // Change type to "bar", "area", "spline", "pie",etc.
        type: "column",
        dataPoints: [
            { label: "Rinjani",  y: 10  },
            { label: "Bromo", y: 15  },
            { label: "Labuan Bajo", y: 25  },
            { label: "Raja Ampat",  y: 30  },
            { label: "Semeru",  y: 28  }
        ]
    }
    ]
});
chart.render();

}
</script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
</body>

</html>