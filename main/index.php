<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>AdminLTE 2 | Top Navigation</title>

    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
      name="viewport"
    />

    <link
      rel="stylesheet"
      href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css"
    />

    <link
      rel="stylesheet"
      href="https://adminlte.io/themes/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css"
    />

    <link
      rel="stylesheet"
      href="https://adminlte.io/themes/AdminLTE/bower_components/Ionicons/css/ionicons.min.css"
    />

    <link
      rel="stylesheet"
      href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css"
    />

    <link
      rel="stylesheet"
      href="https://adminlte.io/themes/AdminLTE/dist/css/skins/_all-skins.min.css"
    />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"
    />
    <script nonce="d4bb9140-ea7d-41a9-bda9-cf067c52fcae">
      (function(w,d){!function(cM,cN,cO,cP){cM.zarazData=cM.zarazData||{};cM.zarazData.executed=[];cM.zaraz={deferred:[],listeners:[]};cM.zaraz.q=[];cM.zaraz._f=function(cQ){return function(){var cR=Array.prototype.slice.call(arguments);cM.zaraz.q.push({m:cQ,a:cR})}};for(const cS of["track","set","debug"])cM.zaraz[cS]=cM.zaraz._f(cS);cM.zaraz.init=()=>{var cT=cN.getElementsByTagName(cP)[0],cU=cN.createElement(cP),cV=cN.getElementsByTagName("title")[0];cV&&(cM.zarazData.t=cN.getElementsByTagName("title")[0].text);cM.zarazData.x=Math.random();cM.zarazData.w=cM.screen.width;cM.zarazData.h=cM.screen.height;cM.zarazData.j=cM.innerHeight;cM.zarazData.e=cM.innerWidth;cM.zarazData.l=cM.location.href;cM.zarazData.r=cN.referrer;cM.zarazData.k=cM.screen.colorDepth;cM.zarazData.n=cN.characterSet;cM.zarazData.o=(new Date).getTimezoneOffset();if(cM.dataLayer)for(const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_,da)=>({...c_[1],...da[1]})))))zaraz.set(cZ[0],cZ[1],{scope:"page"});cM.zarazData.q=[];for(;cM.zaraz.q.length;){const db=cM.zaraz.q.shift();cM.zarazData.q.push(db)}cU.defer=!0;for(const dc of[localStorage,sessionStorage])Object.keys(dc||{}).filter((de=>de.startsWith("_zaraz_"))).forEach((dd=>{try{cM.zarazData["z_"+dd.slice(7)]=JSON.parse(dc.getItem(dd))}catch{cM.zarazData["z_"+dd.slice(7)]=dc.getItem(dd)}}));cU.referrerPolicy="origin";cU.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));cT.parentNode.insertBefore(cU,cT)};["complete","interactive"].includes(cN.readyState)?zaraz.init():cM.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);
    </script>
  </head>

  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a
                href="https://adminlte.io/themes/AdminLTE/index2.html"
                class="navbar-brand"
                ><b>Aplikasi</b>POS</a
              >
              <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#navbar-collapse"
              >
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <div
              class="collapse navbar-collapse pull-left"
              id="navbar-collapse"
            >
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Dashboard</a></li>
                <li><a href="#">Sales</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Customers</a></li>
                <li><a href="#">Suppliers</a></li>
                <li><a href="#">Sales Report</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    >Dropdown <span class="caret"></span
                  ></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li class="divider"></li>
                  </ul>
                </li>
              </ul>
            </div>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                  <a href="../logout.php" class="dropdown-toggle">
                    <img
                      src="https://adminlte.io/themes/AdminLTE/dist/img/user2-160x160.jpg"
                      class="user-image"
                      alt="User Image"
                    />

                    <span class="hidden-xs">Log Out</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <div class="content-wrapper">
        <div class="container">
          <section class="content-header">
            <h1>
              Top Navigation
              <small>Example 2.0</small>
            </h1>
            <ol class="breadcrumb">
              <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
              </li>
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
            </ol>
          </section>

          <section class="content">
            <div class="callout callout-info">
              <h4>Tip!</h4>
              <p>
                Add the layout-top-nav class to the body tag to get this layout.
                This feature can also be used with a sidebar! So use this class
                if you want to remove the custom dropdown menus from the navbar
                and use regular links instead.
              </p>
            </div>
            <div class="callout callout-danger">
              <h4>Warning!</h4>
              <p>
                The construction of this layout differs from the normal one. In
                other words, the HTML markup of the navbar and the content will
                slightly differ than that of the normal layout.
              </p>
            </div>
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Blank Box</h3>
              </div>
              <div class="box-body">The great content goes here</div>
            </div>
          </section>
        </div>
      </div>

      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs"><b>Version</b> 2.4.13</div>
          <strong
            >Copyright &copy; 2014-2019
            <a href="https://adminlte.io">AdminLTE</a>.</strong
          >
          All rights reserved.
        </div>
      </footer>
    </div>

    <script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>

    <script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <script src="https://adminlte.io/themes/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>

    <script src="https://adminlte.io/themes/AdminLTE/dist/js/adminlte.min.js"></script>

    <script src="https://adminlte.io/themes/AdminLTE/dist/js/demo.js"></script>
  </body>
</html>
