<!DOCTYPE html><html lang="en"> <head> <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content=""> <meta name="author" content="">
   <link rel="icon" href="img/favicon.png"> <title>Profile</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


 <link href="{{URL::asset('bootstrap-3.3.5/css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{URL::asset('assets/animate.min.css') }}" rel="stylesheet">
 <link href="{{URL::asset('font-awesome-4.4.0/css/font-awesome.min.css')  }}" rel="stylesheet">
 <link href="{{URL::asset('assets/timeline.css') }}" rel="stylesheet">
  <script src="assets/js/jquery.1.11.1.min.js"></script>
  <script src="bootstrap-3.3.5/js/bootstrap.min.js"></script>
  <script src="{{URL::asset('assets/custom.js') }}"></script>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
     <link href="bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
     <link href="assets/animate.min.css" rel="stylesheet">
     <link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="assets/timeline.css" rel="stylesheet">
     <script src="assets/jquery.1.11.1.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <script src="bootstrap-3.3.5/js/bootstrap.min.js"></script>
     <script src="assets/custom.js"></script>


  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/style.css')  }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{URL::asset('css/owl.carousel.css')  }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    </head>
    <body class="animated fadeIn" style="background-color:rgb(234,234,234)">

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
                  <li class="active"><a href="{{  url('home')   }}">Accueil</a></li>

                  <li><a href="{{  url('logout')   }}">Deconnexion</a></li>
                  <li><a href="{{ route('notifications')}}">Notifications</a></li>
                  <li><a href="contact.html">Contactez nous</a></li>
                </ul>
              </nav>
          </div>
        <!--start-768px-menu---->
          <div class="header_sub">
            <div class="h_menu">
              <ul>
                <li class="active"><a href="{{  url('home')   }}" >Accueil</a></li>
                <li><a href="{{ route('journal.index',Auth::user()->id)}}" style="text-decoration:none">{{ Auth::user()->nom}} {{Auth::user()->prenom}}</a></li>
                @if(Auth::user()->compteur != '0')
                <li><a href="{{ route('notifications')}}" style="text-decoration:none">Notifications({{ Auth::user()->compteur}})</a></li>
                @elseif(Auth::user()->compteur == '0')
                <li><a href="{{ route('notifications')}}" style="text-decoration:none">Notifications</a></li>
                @endif
                <li><a href="{{ url('logout')  }}" style="text-decoration:none">Deconnexion</a></li>
                <li><a href="#" style="text-decoration:none">Contactez nous</a></li>
              </ul>
            </div>
            <div class="h_search" style="width : 220px;">
                <form>
                  <input type="text" value="" placeholder="Recherchez par ici...">
                  <input type="submit" value="">
                </form>
            </div>
            <div class="clear"> </div>
          </div>
      </div>
    </div>   @yield('content')
    <div class="chat-sidebar focus" style="margin-top:30px;width:250px">
      <div class="list-group text-left">
        <p class="text-center visible-xs"><a href="#" class="hide-chat">Hide</a></p>
        <p class="text-center chat-title">Vos relations</p>
        @foreach(App\Relation::where('id_1',\Auth::user()->id)->get() as $relation)
        <a href="{{ route('journal.index',App\User::where('id',$relation->id_2)->first()->id)}}" class="list-group-item">

            <img src="/photos/{{ App\User::where('id',$relation->id_2)->first()->photo }}" class="img-chat img-thumbnail">

          <span class="chat-user-name" style="width:150px;">{{$relation->nom_2 }} {{ $relation->prenom_2 }}</span>
      </a>
     @endforeach
      </div>
    </div>
</body>
