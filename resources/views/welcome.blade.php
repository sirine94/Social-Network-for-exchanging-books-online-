@extends('layouts.app')

@section('content')
<div class="templatemo_headerimage" style="margin-top:0px;">
    <div class="flexslider">
      <ul class="slides">
        <li><img src="images/slider/photo1.jpg" alt="Slide 1" height="500px"></li>
        <li><img src="images/slider/photo2.jpg" alt="Slide 2" height="500px"></li>
        <li><img src="images/slider/photo3.jpg" alt="Slide 3" height="500px"></li>
      </ul>
    </div>
  </div>
  <div class="slider-caption">
    <div class="templatemo_homewrapper">
      <div class="templatemo_hometitle">BIENVENUE A BOOKS CLUB</div>
      <div class="templatemo_hometext">Beaucoup du teeeexte,du blaaaaa,du blaaaaa,du blaaaaaaa</div>
      <div class="templatemo_homebutton" style="background: rgb(57,154,181);font:bold;"><a href="#">Continue</a></div>
    </div>
  </div>
</div>
<!-- header end -->
<div class="clear"></div>
<div class="templatemo_servicewrapper" id="templatemo_service_page">
  <div class="container">
    <div class="row">


      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox margin_bottom_1col margin_bottom_2col">
          <div><img src="images/community.png" width="100px" height="100px"></div>
          <div class="templatemo_service_title">A propos nous</div>
          <p>Renseignez vous sur notre réseau social destiné pour les bibliophiles.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox margin_bottom_1col margin_bottom_2col">
        <div> <img src="images/research.png" width="150px" height="100px"></div>
          <div class="templatemo_service_title">Recherche</div>
          <p>Effectuez tous vos recherches </p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox margin_bottom_1col">
         <div><img src="images/compte.jpg" width="100px" height="100px"></div>
          <div class="templatemo_service_title">Inscription</div>
          <p>Creez un nouveau compte sur notre site web</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox">
         <div><img src="images/login.png" width="150px" height="100px">
          <div class="templatemo_service_title">Connexion</div>
          <p>Consultez et retrouvez de nouveaux oeuvres et amis</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
