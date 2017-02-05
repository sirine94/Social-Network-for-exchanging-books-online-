<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Books Club</title>
    <!DOCTYPE html>
    <!--
    Conquer Template
    http://www.templatemo.com/preview/templatemo_426_conquer
    -->


    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Style Sheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')  }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/templatemo_misc.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/templatemo_style.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <!-- JavaScripts -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('js/jquery-1.11.1.min.js')  }}"></script>
    <script src="{{ URL::asset('js/bootstrap-dropdown.js')  }}"></script>
    <script src="{{ URL::asset('js/bootstrap-collapse.js')  }}"></script>
    <script src="{{ URL::asset('js/bootstrap-tab.js')  }}"></script>
    <script src="{{ URL::asset('js/jquery.singlePageNav.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.flexslider.js')  }}"></script>
    <script src="{{ URL::asset('js/custom.js')  }}"></script>
    <script src="{{ URL::asset('js/jquery.lightbox.js')  }}"></script>
    <script src="{{ URL::asset('js/temp latemo_custom.js')  }}"></script>
    <script src="{{ URL::asset('js/responsiveCarousel.min.js')  }}"></script>




        <link href="bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/animate.min.css" rel="stylesheet">
        <link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/timeline.css" rel="stylesheet">
        <script src="assets/jquery.1.11.1.min.js"></script>

        <script src="bootstrap-3.3.5/js/bootstrap.min.js"></script>
        <script src="assets/custom.js"></script>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ URL::asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/magnific-popup.css') }}">
    </head>
    <body >

    <!-- start header -->
    <div class="header_btm">
      <div class="wrap">
        <!------start-768px-menu---->
          <div id="page">
              <div id="header">
                <a class="navicon" href="#menu-left"> </a>
              </div>
              <nav id="menu-left">
                <ul>
                  <li class="active"><a href="index.html">Accueil</a></li>
                  <li><a href="about.html">A propos nous</a></li>
                  <li><a href="{{  url('login') }}">Connexion</a></li>
                  <li><a href="{{ url('register') }}">Inscription</a></li>
                  <li><a href="contact.html">Contactez nous</a></li>
                </ul>
              </nav>
          </div>
        <!------start-768px-menu---->
          <div class="header_sub">
            <div class="h_menu">
              <ul>
                <li class="active"><a href="index.html">Accueil</a></li>
                <li><a href="#">A propos nous</a></li>
                <li><a href="{{ url('login')}}">Connexion</a></li>
                <li><a href="{{ url('register')}}">Inscription</a></li>
                <li><a href="#">Contactez nous</a></li>
              </ul>
            </div>
            <div class="h_search">
                <form>
                  <input type="text" value="" placeholder="Recherchez par ici...">
                  <input type="submit" value="">
                </form>
            </div>
            <div class="clear"> </div>
          </div>
      </div>
    </div>
 @yield('content')
</body>
</html>
