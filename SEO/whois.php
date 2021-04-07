
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
<h2 class="text-center">Whois Lookup</h2>
<div class="tile">
  <div class="col-md-12">
      <?php
      error_reporting(0);
      $domain = $_GET['domain'];
      $whoisservers = array(
      	"ac" =>"whois.nic.ac",
              "academy" =>"whois.donuts.co",
              "actor" =>"whois.unitedtld.com",
      	"ae" =>"whois.nic.ae",
              "ae" =>"whois.aeda.net.ae",
      	"aero" =>"whois.aero",
      	"af" =>"whois.nic.af",
      	"ag" =>"whois.nic.ag",
              "agency" =>"whois.donuts.co",
              "ai" =>"whois.ai",
      	"al" =>"whois.ripe.net",
      	"am" =>"whois.amnic.net",
      	"arpa" =>"whois.iana.org",
              "archi" =>"whois.ksregistry.net",
      	"as" =>"whois.nic.as",
      	"asia" =>"whois.nic.asia",
              "associates" =>"whois.donuts.co",
      	"at" =>"whois.nic.at",
      	"au" =>"whois.aunic.net",
              "au" =>"whois.audns.net.au",
              "aw" =>"whois.nic.aw",
              "ax" =>"whois.ax",
              "az" =>"whois.az",
      	"az" =>"whois.ripe.net",
      	"ba" =>"whois.ripe.net",
              "bar" =>"whois.nic.bar",
              "bargains" =>"whois.donuts.co",
      	"be" =>"whois.dns.be",
              "berlin" =>"whois.nic.berlin",
      	"bg" =>"whois.register.bg",
      	"bi" =>"whois.nic.bi",
              "bi" =>"whois1.nic.bi",
              "bike" =>"whois.donuts.co",
      	"biz" =>"whois.biz",
      	"bj" =>"whois.nic.bj",
              "blackfriday" =>"whois.uniregistry.net",
              "bn" =>"whois.bn",
              "boutique" =>"whois.donuts.co",
              "build" =>"whois.nic.build",
              "builders" =>"whois.donuts.co",
      	"br" =>"whois.registro.br",
      	"bt" =>"whois.netnames.net",
      	"by" =>"whois.ripe.net",
              "by" =>"whois.cctld.by",
              "bw" =>"whois.nic.net.bw",
      	"bz" =>"whois.belizenic.bz",
      	"ca" =>"whois.cira.ca",
              "cab" =>"whois.donuts.co",
              "camera" =>"whois.donuts.co",
              "camp" =>"whois.donuts.co",
              "captial" =>"whois.donuts.co",
              "cards" =>"whois.donuts.co",
              "careers" =>"whois.donuts.co",
      	"cat" =>"whois.cat",
      	"cc" =>"whois.nic.cc",
      	"cd" =>"whois.nic.cd",
      	"ch" =>"whois.nic.ch",
      	"ci" =>"whois.nic.ci",
      	"ck" =>"whois.nic.ck",
      	"cl" =>"whois.nic.cl",
      	"cn" =>"whois.cnnic.net.cn",
      	"com" =>"whois.verisign-grs.com",
              "computer" =>"whois.donuts.co",
      	"coop" =>"whois.nic.coop",
              "co.uk" =>"whois.nic.uk",
      	"cx" =>"whois.nic.cx",
      	"cy" =>"whois.ripe.net",
      	"cz" =>"whois.nic.cz",
      	"de" =>"whois.denic.de",
      	"dk" =>"whois.dk-hostmaster.dk",
      	"dm" =>"whois.nic.cx",
      	"dz" =>"whois.ripe.net",
      	"edu" =>"whois.educause.edu",
      	"ee" =>"whois.eenet.ee",
      	"eg" =>"whois.ripe.net",
      	"es" =>"whois.ripe.net",
      	"eu" =>"whois.eu",
      	"fi" =>"whois.ficora.fi",
      	"fo" =>"whois.ripe.net",
      	"fr" =>"whois.nic.fr",
      	"gb" =>"whois.ripe.net",
      	"gd" =>"whois.adamsnames.com",
      	"ge" =>"whois.ripe.net",
      	"gg" =>"whois.channelisles.net",
      	"gi" =>"whois2.afilias-grs.net",
      	"gl" =>"whois.ripe.net",
      	"gm" =>"whois.ripe.net",
      	"gov" =>"whois.nic.gov",
      	"gr" =>"whois.ripe.net",
      	"gs" =>"whois.nic.gs",
      	"gw" =>"whois.nic.gw",
      	"gy" =>"whois.registry.gy",
      	"hk" =>"whois.hkirc.hk",
      	"hm" =>"whois.registry.hm",
      	"hn" =>"whois2.afilias-grs.net",
      	"hr" =>"whois.ripe.net",
      	"hu" =>"whois.nic.hu",
      	"ie" =>"whois.domainregistry.ie",
      	"il" =>"whois.isoc.org.il",
      	"in" =>"whois.inregistry.net",
      	"info" =>"whois.afilias.net",
      	"int" =>"whois.iana.org",
      	"io" =>"whois.nic.io",
      	"iq" =>"vrx.net",
      	"ir" =>"whois.nic.ir",
      	"is" =>"whois.isnic.is",
      	"it" =>"whois.nic.it",
      	"je" =>"whois.channelisles.net",
      	"jobs" =>"jobswhois.verisign-grs.com",
      	"jp" =>"whois.jprs.jp",
      	"ke" =>"whois.kenic.or.ke",
      	"kg" =>"www.domain.kg",
      	"ki" =>"whois.nic.ki",
      	"kr" =>"whois.nic.or.kr",
      	"kz" =>"whois.nic.kz",
      	"la" =>"whois.nic.la",
      	"li" =>"whois.nic.li",
      	"lt" =>"whois.domreg.lt",
      	"lu" =>"whois.dns.lu",
      	"lv" =>"whois.nic.lv",
      	"ly" =>"whois.nic.ly",
      	"ma" =>"whois.iam.net.ma",
      	"mc" =>"whois.ripe.net",
      	"md" =>"whois.ripe.net",
      	"me" =>"whois.meregistry.net",
      	"mg" =>"whois.nic.mg",
      	"mil" =>"whois.nic.mil",
      	"mn" =>"whois.nic.mn",
      	"mobi" =>"whois.dotmobiregistry.net",
      	"ms" =>"whois.adamsnames.tc",
      	"mt" =>"whois.ripe.net",
      	"mu" =>"whois.nic.mu",
      	"museum" =>"whois.museum",
      	"mx" =>"whois.nic.mx",
      	"my" =>"whois.mynic.net.my",
      	"na" =>"whois.na-nic.com.na",
      	"name" =>"whois.nic.name",
      	"net" =>"whois.verisign-grs.net",
      	"nf" =>"whois.nic.nf",
      	"nl" =>"whois.domain-registry.nl",
      	"no" =>"whois.norid.no",
      	"nu" =>"whois.nic.nu",
      	"nz" =>"whois.srs.net.nz",
      	"org" =>"whois.pir.org",
      	"pl" =>"whois.dns.pl",
      	"pm" =>"whois.nic.pm",
      	"pr" =>"whois.uprr.pr",
      	"pro" =>"whois.registrypro.pro",
      	"pt" =>"whois.dns.pt",
              "pw" =>"whois.nic.pw",
      	"re" =>"whois.nic.re",
              "ryukyu" =>"whois.nic.ryukyu",
      	"ro" =>"whois.rotld.ro",
      	"ru" =>"whois.ripn.net",
      	"sa" =>"whois.nic.net.sa",
      	"sb" =>"whois.nic.net.sb",
      	"sc" =>"whois2.afilias-grs.net",
      	"se" =>"whois.iis.se",
      	"sg" =>"whois.nic.net.sg",
      	"sh" =>"whois.nic.sh",
      	"si" =>"whois.arnes.si",
      	"sk" =>"whois.ripe.net",
      	"sm" =>"whois.ripe.net",
      	"st" =>"whois.nic.st",
      	"su" =>"whois.ripn.net",
      	"tc" =>"whois.adamsnames.tc",
      	"tel" =>"whois.nic.tel",
      	"tf" =>"whois.nic.tf",
      	"th" =>"whois.thnic.net",
      	"tj" =>"whois.nic.tj",
      	"tk" =>"whois.dot.tk",
      	"tl" =>"whois.nic.tl",
      	"tm" =>"whois.nic.tm",
      	"tn" =>"whois.ripe.net",
      	"to" =>"whois.tonic.to",
      	"tp" =>"whois.nic.tl",
      	"tr" =>"whois.nic.tr",
      	"travel" =>"whois.nic.travel",
      	"tv" => "tvwhois.verisign-grs.com",
      	"tw" =>"whois.twnic.net.tw",
      	"ua" =>"whois.net.ua",
      	"ug" =>"whois.co.ug",
      	"uk" =>"whois.nic.uk",
      	"us" =>"whois.nic.us",
      	"uy" =>"nic.uy",
      	"uz" =>"whois.cctld.uz",
      	"va" =>"whois.ripe.net",
      	"vc" =>"whois2.afilias-grs.net",
      	"ve" =>"whois.nic.ve",
      	"vg" =>"whois.adamsnames.tc",
      	"wf" =>"whois.nic.wf",
      	"ws" =>"whois.website.ws",
              "xyz" =>"whois.nic.xyz",
              "xxx" =>"whois.nic.xxx",
      	"yt" =>"whois.nic.yt",
      	"yu" =>"whois.ripe.net",
              "zone" =>"whois.donuts.co",
              "cat" =>"whois.cat",
              "catering" =>"whois.donuts.co",
      //other list - with same - some duplicate
              "cc" =>"ccwhois.verisign-grs.com",
              "center" =>"whois.donuts.co",
              "ceo" =>"whois.nic.ceo",
              "cf" =>"whois.dot.cf",
              "ch" =>"whois.nic.ch",
              "cheap" =>"whois.donuts.co",
              "christmas" =>"whois.uniregistry.net",
              "ci" =>"whois.nic.ci",
              "cl" =>"whois.nic.cl",
              "cleaning" =>"whois.donuts.co",
              "clothing" =>"whois.donuts.co",
              "club" =>"whois.nic.club",
              "cn" =>"whois.cnnic.cn",
              "co" =>"whois.nic.co",
              "codes" =>"whois.donuts.co",
              "coffee" =>"whois.donuts.co",
              "college" =>"whois.centralnic.com",
              "cologne" =>"whois-fe1.pdt.cologne.tango.knipp.de",
              "community" =>"whois.donuts.co",
              "company" =>"whois.donuts.co",
              "construction" =>"whois.donuts.co",
              "contractors" =>"whois.donuts.co",
              "cooking" =>"whois-dub.mm-registry.com",
              "cool" =>"whois.donuts.co",
              "coop" =>"whois.nic.coop",
              "country" =>"whois-dub.mm-registry.com",
              "cruises" =>"whois.donuts.co",
              "cx" =>"whois.nic.cx",
              "cz" =>"whois.nic.cz",
              "dating" =>"whois.donuts.co",
              "de" =>"whois.denic.de",
              "democrat" =>"whois.unitedtld.com",
              "desi" =>"whois.ksregistry.net",
              "diamonds" =>"whois.donuts.co",
              "directory" =>"whois.donuts.co",
              "dk" =>"whois.dk-hostmaster.dk",
              "dm" =>"whois.nic.dm",
              "domains" =>"whois.donuts.co",
              "dz" =>"whois.nic.dz",
              "ec" =>"whois.nic.ec",
              "edu" =>"whois.educause.edu",
              "education" =>"whois.donuts.co",
              "ee" =>"whois.tld.ee",
              "email" =>"whois.donuts.co",
              "engineering" =>"whois.donuts.co",
              "enterprises" =>"whois.donuts.co",
              "equipment" =>"whois.donuts.co",
              "es" =>"whois.nic.es",
              "estate" =>"whois.donuts.co",
              "eus" =>"whois.eus.coreregistry.net",
              "events" =>"whois.donuts.co",
              "expert" =>"whois.donuts.co",
              "exposed" =>"whois.donuts.co",
              "farm" =>"whois.donuts.co",
              "feedback" =>"whois.centralnic.com",
              "fi" =>"whois.fi",
              "fish" =>"whois.donuts.co",
              "fishing" =>"whois-dub.mm-registry.com",
              "flights" =>"whois.donuts.co",
              "florist" =>"whois.donuts.co",
              "fo" =>"whois.nic.fo",
              "foo" =>"domain-registry-whois.l.google.com",
              "foundation" =>"whois.donuts.co",
              "fr" =>"whois.nic.fr",
              "frogans" =>"whois-frogans.nic.fr",
              "futbol" =>"whois.unitedtld.com",
              "ga" =>"whois.gal.coreregistry.net",
              "gal" =>"whois.donuts.co",
              "gd" =>"whois.nic.gd",
              "gg" =>"whois.gg",
              "gi" =>"whois2.afilias-grs.net",
              "gift" =>"whois.uniregistry.net",
              "gl" =>"whois.nic.gl",
              "glass" =>"whois.donuts.co",
              "gop" =>"whois-cl01.mm-registry.com",
              "gov" =>"whois.dotgov.gov",
              "graphics" =>"whois.donuts.co",
              "gripe" =>"whois.donuts.co",
              "gs" =>"whois.nic.gs",
              "guitars" =>"whois.uniregistry.net",
              "guru" =>"whois.donuts.co",
              "gy" =>"whois.registry.gy",
              "haus" =>"whois.unitedtld.com",
              "hk" =>"whois.hkirc.hk",
              "hn" =>"whois.nic.hn",
              "holiday" =>"whois.donuts.co",
              "horse" =>"whois-dub.mm-registry.com",
              "house" =>"whois.donuts.co",
              "hr" =>"whois.dns.hr",
              "ht" =>"whois.nic.ht",
              "hu" =>"whois.nic.hu",
              "id" =>"whois.pandi.or.id",
              "ie" =>"whois.domainregistry.ie",
              "il" =>"whois.isoc.org.il",
              "im" =>"whois.nic.im",
              "immobilien" =>"whois.unitedtld.com",
              "in" =>"whois.inregistry.net",
              "industries" =>"whois.donuts.co",
              "institute" =>"whois.donuts.co",
              "int" =>"whois.iana.org",
              "international" =>"whois.donuts.co",
              "iq" =>"whois.cmc.iq",
              "ir" =>"whois.nic.ir",
              "is" =>"whois.isnic.is",
              "it" =>"whois.nic.it",
              "je" =>"whois.je",
              "jobs" =>"jobswhois.verisign-grs.com",
              "jp" =>"whois.jprs.jp",
              "kaufen" =>"whois.unitedtld.com",
              "ke" =>"whois.kenic.or.ke",
              "kg" =>"whois.domain.kg",
              "ki" =>"whois.nic.ki",
              "kitchen" =>"whois.donuts.co",
              "kiwi" =>"whois.dot-kiwi.com",
              "koeln" =>"whois-fe1.pdt.koeln.tango.knipp.de",
              "kr" =>"whois.kr",
              "kz" =>"whois.nic.kz",
              "la" =>"whois.nic.la",
              "land" =>"whois.donuts.co",
              "lease" =>"whois.donuts.co",
              "li" =>"whois.nic.li",
              "lighting" =>"whois.donuts.co",
              "limo" =>"whois.donuts.co",
              "link" =>"whois.uniregistry.net",
              "london" =>"whois-lon.mm-registry.com",
              "lt" =>"whois.domreg.lt",
              "lu" =>"whois.dns.lu",
              "luxury" =>"whois.nic.luxury",
              "lv" =>"whois.nic.lv",
              "ly" =>"whois.nic.ly",
              "ma" =>"whois.iam.net.ma",
              "management" =>"whois.donuts.co",
              "mango" =>"whois.mango.coreregistry.net",
              "marketing" =>"whois.donuts.co",
              "md" =>"whois.nic.md",
              "me" =>"whois.nic.me",
              "media" =>"whois.donuts.co",
              "menu" =>"whois.nic.menu",
              "mg" =>"whois.nic.mg",
              "miami" =>"whois-dub.mm-registry.com",
              "mk" =>"whois.marnet.mk",
              "ml" =>"whois.dot.ml",
              "mn" =>"whois.nic.mn",
              "mo" =>"whois.monic.mo",
              "mobi" =>"whois.dotmobiregistry.net",
              "moda" =>"whois.unitedtld.com",
              "monash" =>"whois.nic.monash",
              "mp" =>"whois.nic.mp",
              "ms" =>"whois.nic.ms",
              "mu" =>"whois.nic.mu",
              "museum" =>"whois.museum",
              "mx" =>"whois.mx",
              "my" =>"whois.domainregistry.my",
              "na" =>"whois.na-nic.com.na",
              "name" =>"whois.nic.name",
              "nc" =>"whois.nc",
              "nf" =>"whois.nic.nf",
              "ng" =>"whois.nic.net.ng",
              "ninja" =>"whois.unitedtld.com",
              "nl" =>"whois.domain-registry.nl",
              "no" =>"whois.norid.no",
              "nu" =>"whois.iis.nu",
              "nz" =>"whois.srs.net.nz",
              "om" =>"whois.registry.om",
              "onl" =>"whois.afilias-srs.net",
              "paris" =>"whois-paris.nic.fr",
              "partners" =>"whois.donuts.co",
              "parts" =>"whois.donuts.co",
              "pe" =>"kero.yachay.pe",
              "pf" =>"whois.registry.pf",
              "photo" =>"whois.uniregistry.net",
              "photography" =>"whois.donuts.co",
              "photos" =>"whois.donuts.co",
              "pics" =>"whois.uniregistry.net",
              "pictures" =>"whois.donuts.co",
              "pl" =>"whois.dns.pl",
              "plumbing" =>"whois.donuts.co",
              "pm" =>"whois.nic.pm",
              "post" =>"whois.dotpostregistry.net",
              "pr" =>"whois.nic.pr",
              "pro" =>"whois.dotproregistry.net",
              "productions" =>"whois.donuts.co",
              "properties" =>"whois.donuts.co",
              "pt" =>"whois.dns.pt",
              "pub" =>"whois.unitedtld.com",
              "pw" =>"whois.nic.pw",
              "qa" =>"whois.registry.qa",
              "quebec" =>"whois.quebec.rs.corenic.net",
              "re" =>"whois.nic.re",
              "recipes" =>"whois.donuts.co",
              "reisen" =>"whois.donuts.co",
              "rentals" =>"whois.donuts.co",
              "repair" =>"whois.donuts.co",
              "report" =>"whois.donuts.co",
              "rest" =>"whois.centralnic.com",
              "reviews" =>"whois.unitedtld.com",
              "rich" =>"whois.afilias-srs.net",
              "ro" =>"whois.rotld.ro",
              "rocks" =>"whois.unitedtld.com",
              "rodeo" =>"whois-dub.mm-registry.com",
              "rs" =>"whois.rnids.rs",
              "ru" =>"whois.tcinet.ru",
              "ruhr" =>"whois.nic.ruhr",
              "sa" =>"whois.nic.net.sa",
              "saarland" =>"whois.ksregistry.net",
              "sb" =>"whois.nic.net.sb",
              "sc" =>"whois2.afilias-grs.net",
              "se" =>"whois.iis.se",
              "services" =>"whois.donuts.co",
              "sexy" =>"whois.uniregistry.net",
              "sg" =>"whois.sgnic.sg",
              "sh" =>"whois.nic.sh",
              "shoes" =>"whois.donuts.co",
              "si" =>"whois.arnes.si",
              "singles" =>"whois.donuts.co",
              "sk" =>"whois.sk-nic.sk",
              "sm" =>"whois.nic.sm",
              "sn" =>"whois.nic.sn",
              "so" =>"whois.nic.so",
              "social" =>"whois.unitedtld.com",
              "solar" =>"whois.donuts.co",
              "solutions" =>"whois.donuts.co",
              "soy" =>"domain-registry-whois.l.google.com",
              "st" =>"whois.nic.st",
              "su" =>"whois.tcinet.ru",
              "supplies" =>"whois.donuts.co",
              "supply" =>"whois.donuts.co",
              "support" =>"whois.donuts.co",
              "sx" =>"whois.sx",
              "sy" =>"whois.tld.sy",
              "systems" =>"whois.donuts.co",
              "tattoo" =>"whois.uniregistry.net",
              "tc" =>"whois.meridiantld.net",
              "technology" =>"whois.donuts.co",
              "tel" =>"whois.nic.tel",
              "tf" =>"whois.nic.tf",
              "th" =>"whois.thnic.co.th",
              "tienda" =>"whois.donuts.co",
              "tips" =>"whois.donuts.co",
              "tk" =>"whois.dot.tk",
              "tl" =>"whois.nic.tl",
              "tm" =>"whois.nic.tm",
              "tn" =>"whois.ati.tn",
              "to" =>"whois.tonic.to",
              "today" =>"whois.donuts.co",
              "tools" =>"whois.donuts.co",
              "town" =>"whois.donuts.co",
              "toys" =>"whois.donuts.co",
              "tr" =>"whois.nic.tr",
              "training" =>"whois.donuts.co",
              "travel" =>"whois.nic.travel",
              "tv" =>"tvwhois.verisign-grs.com",
              "tw" =>"whois.twnic.net.tw",
              "tz" =>"whois.tznic.or.tz",
              "ua" =>"whois.ua",
              "ug" =>"whois.co.ug",
              "uk" =>"whois.nic.uk",
              "university" =>"whois.donuts.co",
              "us" =>"whois.nic.us",
              "uy" =>"whois.nic.org.uy",
              "black" =>"whois.afilias.net",
              "blue" =>"whois.afilias.net",
              "info" =>"whois.afilias.net",
              "kim" =>"whois.afilias.net",
              "pink" =>"whois.afilias.net",
              "red" =>"whois.afilias.net",
              "shiksha" =>"whois.afilias.net",
              "uz" =>"whois.cctld.uz",
              "vacations" =>"whois.donuts.co",
              "vc" =>"whois2.afilias-grs.net",
              "ve" =>"whois.nic.ve",
              "vegas" =>"whois.afilias-srs.net",
              "ventures" =>"whois.donuts.co",
              "vg" =>"ccwhois.ksregistry.net",
              "viajes" =>"whois.donuts.co",
              "villas" =>"whois.donuts.co",
              "vision" =>"whois.donuts.co",
              "vodka" =>"whois-dub.mm-registry.com",
              "voting" =>"whois.voting.tld-box.at",
              "voyage" =>"whois.donuts.co",
              "vu" =>"vunic.vu",
              "wang" =>"whois.gtld.knet.cn",
              "watch" =>"whois.donuts.co",
              "wed" =>"whois.nic.wed",
              "wf" =>"whois.nic.wf",
              "wien" =>"whois.nic.wien",
              "wiki" =>"whois.nic.wiki",
              "works" =>"whois.donuts.co",
              "zm" =>"whois.nic.zm");

      function LookupDomain($domain){
      	global $whoisservers;
      	$domain_parts = explode(".", $domain);
      	$tld = strtolower(array_pop($domain_parts));
      	$whoisserver = $whoisservers[$tld];
      	if(!$whoisserver) {
      		return "Error: No appropriate Whois server found for $domain domain!";
      	}
      	$result = QueryWhoisServer($whoisserver, $domain);
      	if(!$result) {
      		return "Error: No results retrieved from $whoisserver server for $domain domain!";
      	}
      	else {
      		while(strpos($result, "Whois Server:") !== FALSE){
      			preg_match("/Whois Server: (.*)/", $result, $matches);
      			$secondary = $matches[1];
      			if($secondary) {
      				$result = QueryWhoisServer($secondary, $domain);
      				$whoisserver = $secondary;
      			}
      		}
      	}
      	return "$domain domain lookup results from $whoisserver server:\n\n" . $result;
      }

      function LookupIP($ip) {
      	$whoisservers = array(
      		//"whois.afrinic.net", // Africa - returns timeout error :-(
      		"whois.lacnic.net", // Latin America and Caribbean - returns data for ALL locations worldwide :-)
      		"whois.apnic.net", // Asia/Pacific only
      		"whois.arin.net", // North America only
      		"whois.ripe.net" // Europe, Middle East and Central Asia only
      	);
      	$results = array();
      	foreach($whoisservers as $whoisserver) {
      		$result = QueryWhoisServer($whoisserver, $ip);
      		if($result && !in_array($result, $results)) {
      			$results[$whoisserver]= $result;
      		}
      	}
      	$res = "RESULTS FOUND: " . count($results);
      	foreach($results as $whoisserver=>$result) {
      		$res .= "\n\n-------------\nLookup results for $ip from $whoisserver server:\n\n$result";
      	}
      	return $res;
      }

      function ValidateIP($ip) {
      	$ipnums = explode(".", $ip);
      	if(count($ipnums) != 4) {
      		return false;
      	}
      	foreach($ipnums as $ipnum) {
      		if(!is_numeric($ipnum) || ($ipnum > 255)) {
      			return false;
      		}
      	}
      	return $ip;
      }

      function ValidateDomain($domain) {
      	if(!preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8})$/i", $domain)) {
      		return false;
      	}
      	return $domain;
      }

      function QueryWhoisServer($whoisserver, $domain) {
      	$port = 43;
      	$timeout = 10;
      	$fp = @fsockopen($whoisserver, $port, $errno, $errstr, $timeout) or die("Socket Error " . $errno . " - " . $errstr);
      	if($whoisserver == "whois.verisign-grs.com") $domain = "=".$domain; // whois.verisign-grs.com requires the equals sign ("=") or it returns any result containing the searched string.
      	fputs($fp, $domain . "\r\n");
      	$out = "";
      	while(!feof($fp)){
      		$out .= fgets($fp);
      	}
      	fclose($fp);

      	$res = "";
      	if((strpos(strtolower($out), "error") === FALSE) && (strpos(strtolower($out), "not allocated") === FALSE)) {
      		$rows = explode("\n", $out);
      		foreach($rows as $row) {
      			$row = trim($row);
      			if(($row != '') && ($row{0} != '#') && ($row{0} != '%')) {
      				$res .= $row."\n";
      			}
      		}
      	}
      	return $res;
      }
      ?>

      <br>

      <form action="<?=$_SERVER['PHP_SELF'];?>">
      <p><b><label for="domain">Domain / IP Address:</label></b> <input type="text" class="form-control" name="domain" id="domain" value="<?=$domain;?>"> <input type="submit" class="btn btn-block" value="Lookup"></p>
      </form>

      <?
      if($domain) {
      	$domain = trim($domain);
      	if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
      	if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
      	if(ValidateIP($domain)) {
      		$result = LookupIP($domain);
      	}
      	elseif(ValidateDomain($domain)) {
      		$result = LookupDomain($domain);
      	}
      	else die("Invalid Input!");
      	echo "<pre>\n" . $result . "\n</pre>\n";
      }
      ?>




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
