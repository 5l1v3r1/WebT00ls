<?php
error_reporting(0);
$username = $_POST['username'];
$email = $_POST['email'];

$myFile = "data.txt";

$fh = fopen($myFile, 'a') or die("can't open file");

$stringData = "Username : ".$username." Email : ".$email."\n";

fwrite($fh, $stringData);

fclose($fh);

echo'<html>
    <head>
    <meta charset="UTF-8">
       <meta name="description" content="Webt00ls Hacking And Programming">
       <meta name="keywords" content="Hacking Tools, TegalSec, Tegal1337">
       <meta name="author" content="Tegal1337">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcute icon" href="log0.png">
  <title>
    Webt00ls | Tegal1337
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <script type="text/javascript" src="../assets/js/editor.js"></script>
    </head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
         <a href="javascript:void(0)" class="simple-text text-center logo-normal">
            Tegal1337
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="./index.php">
              <i class="tim-icons icon-vector"></i>
              <p>List of Tools</p>
            </a>
          </li>
          <li>
            <a href="./labs.php">
              <i class="tim-icons icon-laptop"></i>
              <p>Labs Pentesting</p>
            </a>
          </li>
          <li>
            <a href="./about.php">
              <i class="tim-icons icon-badge"></i>
              <p>About Us</p>
            </a>
          </li>
          <li>
            <a href="https://blog.tegalsec.org/">
              <i class="tim-icons icon-atom"></i>
              <p>Blog / Tutorial</p>
            </a>
          </li>
          <li>
            <a href="./join.php">
              <i class="tim-icons icon-single-02"></i>
              <p>Join with Us</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Webt00ls</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Changelog
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link"><a href="#" class="nav-item dropdown-item"></a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">update fix bug jso.php</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Update disclaimer for publishing</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another update</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card">
              <h3 class="card-header text-center ">
                Thanks for Submit
              </h3><hr>
              <div class="card-body">
                   <center>
    <div class="col-md-4">
      <div class="tile">

      </div>
    </div>
    <div class="col-md-4">
      <div class="tile">
        <form method="post">
          <button class="btn btn-block"><a href="./index.html">Back to Home</a></button>
        </form>
      </div>
      </center>
      </div>
    </div>
  </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>2018 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        <li class="button-container">
          <a href="https://fb.com/tegal1337" target="_blank" class="btn btn-default btn-block btn-round">Request Tools</a>
          <a href="mailto:tegaln00bshacker@gmail.com" target="_blank" class="btn btn-info btn-block btn-round">
            Lapor Bug
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><
  <script src="../assets/demo/demo.js"></script>
    </body>
    </html>';

?>
