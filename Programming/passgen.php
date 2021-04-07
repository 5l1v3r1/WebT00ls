
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
<h2 class="text-center">Password Generator</h2>
<div class="tile">
  <div class="col-md-12">
      <?php
      function randomPassword() {
          $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789-~!@#$%^&*()+|[]{}=";
          $pass = array(); // remember to declare $pass as an array
          $alphaLength = strlen($alphabet) - 1; // put the length -1 in cache
          for ($i = 0; $i < 32; $i++) {
              $n = rand(0, $alphaLength);
              $pass[] = $alphabet[$n];
          }
          return implode($pass); // turn the array into a string
      }
      // echo randomPassword();
      echo '<input type="text" size=35 value="'.randomPassword().'" onclick="this.select()" class="form-control" readonly>';

      echo "<br><br>";

      function rand_string( $length ) {
          $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
          return substr(str_shuffle($chars),0,$length);

      }
      // echo "32 symbols string only letters and numbers:<br><br>" .rand_string(32);
      echo '<input type="text" size=35 value="'.rand_string(32).'" onclick="this.select()" class="form-control" readonly>';
      ?>

      <br><br>
      <button class="btn btn-block" onclick=location=URL>Generate new string</button>
      <br><br>


      <script>
      //Random password generator- by javascriptkit.com
      //Visit JavaScript Kit (http://javascriptkit.com) for script
      //Credit must stay intact for use

      var keylist="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-~!@#$%^&*()+|[]{}="
      var temp=''

      function generatepass(plength){
      temp=''
      for (i=0;i<plength;i++)
      temp+=keylist.charAt(Math.floor(Math.random()*keylist.length))
      return temp
      }

      function populateform(enterlength){
      document.pgenerate.output.value=generatepass(enterlength)
      }
      </script>

      <form name="pgenerate">
      Password Length: <input class="input2" type="text" name="thelength" size="4" value="32" class="form-control">
      <input type="button" class="btn btn-block" value="Go" onClick="populateform(this.form.thelength.value)"><br><br>
      <input type="text" size=35 name="output" onclick="this.select()" class="form-control" readonly><br><br>
      </form>

      <br>



      		<form action="#" method="get" onsubmit="doGenerate(event);">
      			<div id="charset" class="section" style="margin:0.8em 0em">
      				<p style="margin:0.3em 0em">Character set:</p>
      				<table style="line-height:1.5">
      					<tbody>
      						<tr>
      							<td><input type="checkbox" id="custom"></td>
      							<td><label for="custom"> Custom:</label> <input class="form-control" type="text" id="customchars" value="" size="15" style="width:10em; font-size:80%" oninput="document.getElementById('custom').checked=true;"></td>
      						</tr>
      					</tbody>
      				</table>
      			</div>
      			<div class="section">
      				<table id="type">
      					<tbody>
      						<tr>
      							<td><input type="radio" name="type" id="by-length" checked="checked"> <label for="by-length">Length:&#xA0;</label></td>
      							<td><input type="number" min="0" value="32" step="1" id="length" style="width:4em" oninput="document.getElementById('by-length').checked=true;"> characters</td>
      						</tr>
      						<tr>
      							<td><input type="radio" name="type" id="by-entropy"> <label for="by-entropy">Entropy:</label>&#xA0;</td>
      							<td><input type="number" min="0" value="128" step="any" id="entropy" style="width:4em" oninput="document.getElementById('by-entropy').checked=true;"> bits</td>
      						</tr>
      					</tbody>
      				</table>
      			</div>
      			<p style="max-width:unset; line-height:1.35; word-break:break-all">
      				<input type="submit" class="btn btn-block" value="Generate">
      				<input type="button" class="btn btn-block" value="Copy" id="copy-button" onclick="doCopy();" disabled="disabled"><br><br>
      				Password: <span id="password"></span>
      			</p>
      			<p id="statistics" class="lowlight">&#xA0;</p>
      		</form>

      		<!--==== JavaScript code ====-->

      		<script type="text/javascript">
      		"use strict";

      		/*-- Configuration --*/

      		var CHARACTER_SETS = [
      			[true, "Numbers", "0123456789"],
      			[true, "Lowercase", "abcdefghijklmnopqrstuvwxyz"],
      			[true, "Uppercase", "ABCDEFGHIJKLMNOPQRSTUVWXYZ"],
      			[false, "ASCII symbols", "!\"#$%" + String.fromCharCode(38) + "'()*+,-./:;" + String.fromCharCode(60) + "=>?@[\\]^_`{|}~"],
      			[false, "Space", " "],
      		];

      		/*-- Global variables --*/

      		var passwordElem   = document.getElementById("password"   );
      		var statisticsElem = document.getElementById("statistics" );
      		var copyElem       = document.getElementById("copy-button")
      		var cryptoObject    = null;
      		var currentPassword = null;

      		/*-- Initialization --*/

      		function initCharsets() {
      			function createElem(tagName, attribs) {
      				var result = document.createElement(tagName);
      				if (attribs !== undefined) {
      					for (var key in attribs)
      						result[key] = attribs[key];
      				}
      				return result;
      			}

      			var container = document.querySelector("#charset tbody");
      			var endElem = document.querySelector("#charset tbody > tr:last-child");
      			CHARACTER_SETS.forEach(function(entry, i) {
      				var tr = createElem("tr");
      				var td = tr.appendChild(createElem("td"));
      				var input = td.appendChild(createElem("input", {
      					type: "checkbox",
      					checked: entry[0],
      					id: "charset-" + i}));
      				var td = tr.appendChild(createElem("td"));
      				var label = td.appendChild(createElem("label", {
      					htmlFor: "charset-" + i,
      					textContent: " " + entry[1] + " "}));
      				var small = label.appendChild(createElem("small", {
      					textContent: "(" + entry[2] + ")"}));
      				container.insertBefore(tr, endElem);
      			});
      		}

      		function initCrypto() {
      			var elem = document.getElementById("crypto-getrandomvalues-entropy");
      			elem.textContent = "\u2717";  // X mark

      			if ("crypto" in window)
      				cryptoObject = crypto;
      			else if ("msCrypto" in window)
      				cryptoObject = msCrypto;
      			else
      				return;

      			if (!("getRandomValues" in cryptoObject) || !("Uint32Array" in window) || typeof Uint32Array != "function")
      				cryptoObject = null;
      			else
      				elem.textContent = "\u2713";
      		}

      		/*-- Entry points from HTML code --*/

      		function doGenerate(ev) {
      			ev.preventDefault();

      			// Get and check character set
      			var charset = getPasswordCharacterSet();
      			if (charset.length == 0) {
      				alert("Error: Character set is empty");
      				return;
      			} else if (document.getElementById("by-entropy").checked ? charset.length == 1 : false) {
      				alert("Error: Need at least 2 distinct characters in set");
      				return;
      			}

      			// Calculate desired length
      			var length;
      			if (document.getElementById("by-length").checked)
      				length = parseInt(document.getElementById("length").value, 10);
      			else if (document.getElementById("by-entropy").checked)
      				length = Math.ceil(parseFloat(document.getElementById("entropy").value) * Math.log(2) / Math.log(charset.length));
      			else
      				throw "Assertion error";

      			// Check length
      			if (0 > length) {
      				alert("Negative password length");
      				return;
      			} else if (length > 10000) {
      				alert("Password length too large");
      				return;
      			}

      			// Generate password
      			currentPassword = generatePassword(charset, length);

      			// Calculate and format entropy
      			var entropy = Math.log(charset.length) * length / Math.log(2);
      			var entropystr;
      			if (70 > entropy)
      				entropystr = entropy.toFixed(2);
      			else if (200 > entropy)
      				entropystr = entropy.toFixed(1);
      			else
      				entropystr = entropy.toFixed(0);

      			// Set output elements
      			passwordElem.textContent = currentPassword;
      			statisticsElem.textContent = "Length = " + length + " chars, \u00A0\u00A0Charset size = " +
      				charset.length + " symbols, \u00A0\u00A0Entropy = " + entropystr + " bits";
      			copyElem.disabled = false;
      		}

      		function doCopy() {
      			var container = document.querySelector("body");
      			var textarea = document.createElement("textarea");
      			textarea.style.position = "fixed";
      			textarea.style.opacity = "0";
      			container.insertBefore(textarea, container.firstChild);
      			textarea.value = currentPassword;
      			textarea.focus();
      			textarea.select();
      			document.execCommand("copy");
      			container.removeChild(textarea);
      		}

      		/*-- Low-level functions --*/

      		function getPasswordCharacterSet() {
      			// Concatenate characters from every checked entry
      			var rawCharset = "";
      			CHARACTER_SETS.forEach(function(entry, i) {
      				if (document.getElementById("charset-" + i).checked)
      					rawCharset += entry[2];
      			});
      			if (document.getElementById("custom").checked)
      				rawCharset += document.getElementById("customchars").value;
      			rawCharset = rawCharset.replace(/ /g, "\u00A0");  // Replace space with non-breaking space

      			// Parse UTF-16, remove duplicates, convert to array of strings
      			var charset = [];
      			for (var i = 0; rawCharset.length > i; i++) {
      				var c = rawCharset.charCodeAt(i);
      				if (0xD800 > c || c >= 0xE000) {  // Regular UTF-16 character
      					var s = rawCharset.charAt(i);
      					if (charset.indexOf(s) == -1)
      						charset.push(s);
      					continue;
      				}
      				if (0xDC00 > c ? rawCharset.length > i + 1 : false) {  // High surrogate
      					var d = rawCharset.charCodeAt(i + 1);
      					if (d >= 0xDC00 ? 0xE000 > d : false) {  // Low surrogate
      						var s = rawCharset.substring(i, i + 2);
      						i++;
      						if (charset.indexOf(s) == -1)
      							charset.push(s);
      						continue;
      					}
      				}
      				throw "Invalid UTF-16";
      			}
      			return charset;
      		}

      		function generatePassword(charset, len) {
      			var result = "";
      			for (var i = 0; len > i; i++)
      				result += charset[randomInt(charset.length)];
      			return result;
      		}


      		// Returns a random integer in the range [0, n) using a variety of methods.
      		function randomInt(n) {
      			var x = randomIntMathRandom(n);
      			x = (x + randomIntBrowserCrypto(n)) % n;
      			return x;
      		}


      		// Not secure or high quality, but always available.
      		function randomIntMathRandom(n) {
      			var x = Math.floor(Math.random() * n);
      			if (0 > x || x >= n)
      				throw "Arithmetic exception";
      			return x;
      		}

      		// Uses a secure, unpredictable random number generator if available; otherwise returns 0.
      		function randomIntBrowserCrypto(n) {
      			if (cryptoObject == null)
      				return 0;
      			// Generate an unbiased sample
      			var x = new Uint32Array(1);
      			do cryptoObject.getRandomValues(x);
      			while (x[0] - x[0] % n > 4294967296 - n);
      			return x[0] % n;
      		}

      		/*-- Initialization --*/

      		initCharsets();
      		initCrypto();
      		copyElem.disabled = true;
      		</script>




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
