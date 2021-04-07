
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
<h2 class="text-center">Byte Converter</h2>
<div class="tile">
  <div class="col-md-12">
      <script language="JavaScript"><!--

        function convert(f) {
          f.kb.value=Math.round(f.byte.value/1024*100000)/100000
          f.mb.value=Math.round(f.byte.value/1048576*100000)/100000
          f.gb.value=Math.round(f.byte.value/1073741824*100000)/100000

        }

      function convertkb(f) {
          f.byte.value=Math.round(f.kb.value*1024*100000)/100000
          f.mb.value=Math.round(f.kb.value/1024*100000)/100000
          f.gb.value=Math.round(f.kb.value/1048576*100000)/100000

        }

      function convertmb(f) {
          f.byte.value=Math.round(f.mb.value*1048576*100000)/100000
          f.kb.value=Math.round(f.mb.value*1024*100000)/100000
          f.gb.value=Math.round(f.mb.value/1024*100000)/100000

        }

      function convertgb(f) {
          f.byte.value=Math.round(f.gb.value*1073741824*100000)/100000
          f.kb.value=Math.round(f.gb.value*1048576*100000)/100000
          f.mb.value=Math.round(f.gb.value*1024*100000)/100000

        }

      // --></script>

        <form>

        <!-- <table border="3" bgcolor="#A5F2F3" cellpadding="3" cellspacing="3">
          <tr>
            <td align="center"><font size="5" face="Arial, Helvetica, sans-serif"><strong>Byte</strong></font></td>
            <td align="center"><b><font size="5" face="Arial, Helvetica, sans-serif"><strong>Kilobyte</strong></font></b></td>
            <td align="center"><b><font size="5" face="Arial, Helvetica, sans-serif">Megabyte</font></b></td>
            <td align="center"><font size="5" face="Arial, Helvetica, sans-serif"><b>Gigabyte</b></font></td>

          </tr>
          <tr>
            <td align="center">
              <input style="width: 100px" type="text" name="byte" value="0">
            </td>
            <td align="center">
              <input type="text" style="width: 100px" name="kb" value="0">
            </td>
            <td align="center">
              <input type="text" style="width: 100px" name="mb" value="0">
            </td>

            <td align="center">
              <input type="text" style="width: 100px" name="gb" value="0">
            </td>
          </tr>
          <tr>
            <td align="center">
              <input type="button" style="width: 100px;" name="B2" value="   &gt;   "
              onClick="convert(this.form)">
            </td>
            <td align="center">
              <input type="button" style="width: 100px" name="B22" value="   &lt; &gt;   "
              onClick="convertkb(this.form)">

            </td>
            <td align="center">
              <input type="button" style="width: 100px" name="B23" value="   &lt; &gt;   "
              onClick="convertmb(this.form)">
            </td>
            <td align="center">
              <input type="button" style="width: 100px" name="B24" value="   &lt;   "
              onClick="convertgb(this.form)">
            </td>
          </tr>
        </table> -->

        </form>

      <p><font color="#308CCF" face="Arial, Helvetica, sans-serif" size="2">
        1 Byte = 8 Bits<br>
        1 Kilobyte (kb) = 1024 Bytes<br />
        1 Megabyte (Mb) = 1048576 Bytes<br />
        1 Gigabyte (Gb) = 1073741824 Bytes<br />
        1 Terabyte (Tb) = 1024 Gb = 1099511627776 Bytes<br />
        1 Petabyte (Pb) = 1024 Tb = 1125899906842624 Bytes<br />
      </font></p>
      <p>&nbsp;</p>
      <p><strong>Byte Converter::.</strong></p>
      <script LANGUAGE="JavaScript">
      function calcul()
      {
      var n=document.getElementById("N").value;
      var t=document.getElementById("t").value;
      var nb=parseInt(n);

         if(isNaN(nb))
         {
         alert("Enter digits!");
         }
         else
         {
          if(t=='Ko')
      	{nb=nb*1024;}
      	else {if(t=='Mo')
      		{ nb=nb*1024*1024}
      		else {if(t=='Go')
      		{ nb=nb*1024*1024*1024}
      			else {if(t=='To')
      			{ nb=nb*1024*1024*1024*1024}
      			else {if(t=='Po')
      			{ nb=nb*1024*1024*1024*1024*1024}
      			}}}}
      			        document.getElementById("bits").innerHTML =nb*8+" bits";
      				document.getElementById("octets").innerHTML =nb+" Bytes";
      				document.getElementById("ko").innerHTML =nb/1024+" Kb";
      				document.getElementById("mo").innerHTML =nb/(1024*1024)+" Mb";
      				document.getElementById("go").innerHTML =nb/(1024*1024*1024)+" Gb";
      				document.getElementById("to").innerHTML =nb/(1024*1024*1024*1024)+" Tb";
      				document.getElementById("po").innerHTML =nb/(1024*1024*1024*1024*1024)+" Pb";
         }

      }
      </script>
      <form name="form" >
      <div>
                <input type="number" id="N" class="form-control mb-3">
                 <select name="t" id="t" class="form-control mb-3">
                  <option value="octets" >Bytes</option>
                  <option value="Ko">Kb</option>
                  <option value="Mo">Mb</option>
                  <option value="Go">Gb</option>
                  <option value="To">Tb</option>
      	    <option value="Po">Pb</option>
                 </select>
                <input type="button" name="b" class="btn btn-block" value="Convert" onClick="calcul()">
      </div>
      </form>

      <div id="bits">bits</div>
      <div id="octets">Bytes</div>
      <div id="ko">Kb</div>
      <div id="mo">Mb</div>
      <div id="go">Gb</div>
      <div id="to">Tb</div>
      <div id="po">Pb</div>



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
