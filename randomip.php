
<!DOCTYPE html>
<html lang="en">

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
  <!-- CSS Just for demo purpose, don't include it in your project -->
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
<h2 class="text-center">IP Generator</h2>
<div class="tile">
  <div class="col-md-12">
    <form method="get">
      <input type="number" class="form-control mb-3" required="required" autocomplete="off" placeholder="Enter Number" name="num">
    </div>
    <div class="col-md-12">
      <button class="btn btn-block">Start</button>
      <?php
      error_reporting(0);
      //set maximum execution time for the script
      set_time_limit(30);

      //set default number of loops to run
      $numberOfLoops  = 1;

      //get number of loops to run from the url if it's set
      if (isset($_GET["l"])) {
      	$numberOfLoops = $_GET["l"];

      	$scriptTimeLimit = 30 + $numberOfLoops;
      	set_time_limit($scriptTimeLimit);
      }

      //set default number of random IPs to generate
      $numberOfIPsToGenerate = $_GET['num'];

      //get number of random IPs to generate from the url if it's set
      if (isset($_GET["ips"])) {
      	$numberOfIPsToGenerate = $_GET["ips"];
      }

      //function to get the header info
      function headerInfo($ip) {
      	$url = 'http://'.$ip;
      	$header = get_headers($url, 1);
      	return $header;
      }

      //function to implode an array with the keys
      function implode_with_key($assoc, $inglue = ' = ', $outglue = ', ') {
          $return = '';
          foreach ($assoc as $tk => $tv) {
              $return .= $outglue . $tk . $inglue . $tv;
          }
          return substr($return, strlen($outglue));
      }

      //function to check the http status code of mutiple IP's using multi curl
      function checkHTTPStatusCode($ips) {

      	//count the number of ips to setup multi curl for
      	$numberOfCurlsToDo = count($ips);

      	//setup the user agent string for curl
      	$agent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";

      	//create the multiple cURL handle
      	$mh = curl_multi_init();

      	//loop over the ips and setup multi curl
      	$curlLoop = 0;
      	while ($curlLoop < $numberOfCurlsToDo) {

      		//create curl resources
      		$ch[$curlLoop] = curl_init();

      		//set curl opptions
      		curl_setopt ($ch[$curlLoop], CURLOPT_URL,$ips[$curlLoop]);
      		curl_setopt ($ch[$curlLoop], CURLOPT_USERAGENT, $agent);
      		curl_setopt ($ch[$curlLoop], CURLOPT_RETURNTRANSFER, 1);
      		curl_setopt ($ch[$curlLoop], CURLOPT_HEADER, 1);
      		curl_setopt ($ch[$curlLoop], CURLOPT_TIMEOUT_MS, 500);

      		//add the two handles
      		curl_multi_add_handle($mh,$ch[$curlLoop]);

      		$curlLoop++;
      	}

      	//execute the handles
      	$running = null;
      	do {
      		curl_multi_exec($mh, $running);
      	} while($running > 0);


      	//get http status codes
      	$curlHTTPStatusLoop = 0;
      	while ($curlHTTPStatusLoop < $numberOfCurlsToDo) {
      		$httpcodes[] = curl_getinfo($ch[$curlHTTPStatusLoop], CURLINFO_HTTP_CODE);

      		$curlHTTPStatusLoop++;
      	}

      	//close the handles
      	$curlCloseHandlesLoop = 0;
      	while ($curlCloseHandlesLoop < $numberOfCurlsToDo) {
      		curl_multi_remove_handle($mh, $ch[$curlCloseHandlesLoop]);

      		$curlCloseHandlesLoop++;
      	}
      	curl_multi_close($mh);

      	return $httpcodes;
      }

      function generateIP() {
      	do {
          	$q1 = mt_rand(1,223);
      	} while (in_array($q1, array(10, 100, 127, 169, 172, 192, 198, 203)));
      	$q2 = mt_rand(1,255);
          $q3 = mt_rand(1,255);
          $q4 = mt_rand(1,255);
          $ip = $q1.'.'.$q2.'.'.$q3.'.'.$q4;
          return $ip;
      }
      ?>
      <!DOCTYPE html>
      <head>
      <title>Random IP Generator</title>
      <meta charset='utf-8'>
      <style type="text/css">
      html,
      body {
      	width:100%;
      	height:100%;
      	margin:0;
      	padding:0;
      	background-color:#FFFFFF;
      }
      .green,
      .green a,
      .green:hover {
      	color:green;
      	font-weight:bold;
      }
      </style>
      </head>
      <body>
      <?php

      $i = 0;
      $elapsedLoopExecutionTime = 0;
      while ($i < $numberOfLoops ) {

      	//start microtime to reccord who long it's taking
      	$startTime = microtime(true);

      	//generate array of random IP's for the number of IPs specified
      	$numberOfIPsGenerated = 0;
      	while ($numberOfIPsGenerated < $numberOfIPsToGenerate) {

      		$ips[] = generateIP();

      		$numberOfIPsGenerated++;
      	}

      	//get the status codes from curl
      	$statusCode = checkHTTPStatusCode($ips);

      	//print_r($ips);
      	//print_r($statusCode);

      	echo '<ol>';

      	//echo out the links
      	$i2 = 0;
      	while ($i2 < $numberOfIPsToGenerate) {
      		if ($statusCode[$i2] != '0') {

      			//get header info the live IP's
      			$headerInfo = implode_with_key(headerInfo($ips[$i2]));
      			$headerInfo = str_replace('0 =', '', $headerInfo);

      			echo '<li class="green"><a href="http://'.$ips[$i2].'" target="_blank">'.$ips[$i2 ].'</a> '.$headerInfo.'</li>';
      		} else {
      			echo '<p>'.$ips[$i2].'</p>';

      		}
      		$i2++;
      	}

      	echo '</ol>';

      	$loopExecutionTime = number_format(( microtime(true) - $startTime), 4);

      	// echo '<p>'.$loopExecutionTime.' seconds</p>';

      	$elapsedLoopExecutionTime = $elapsedLoopExecutionTime + $loopExecutionTime;

      	$i++;
      }

      // echo '<p>Total '.$elapsedLoopExecutionTime.' seconds</p>';
      ?>



      <!-- </div> -->
          <!-- </div> -->
      <!-- </div> -->
</div>
    </div>
      </div>

     <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                TEGAL1337
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                DISCLAIMER
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                PRIVACY POLICY
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">TEGAl1337</a>
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
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initGoogleMaps();
    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>