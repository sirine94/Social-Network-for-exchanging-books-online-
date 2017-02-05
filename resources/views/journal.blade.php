@extends('layouts.accueil')

@section('content')
<div class="row text-center cover-container" style="background-color:#00A0B0;margin-top:0px">
      <a href="#" >
       <img src="/photos/{{$user->photo }}">
     </a>
     <h1 class="profile-name">{{ $user->nom}} {{ $user->prenom}}</h1>
     <p class="user-text">sharing awesome ideas with your friends, you can grow, grow fast</p>
   </div>

    <div class="container" style="margin-top:0px;margin-left:0px">
      <div class="col-md-10 no-paddin-xs"><div class="row"> <div class="profile-nav col-md-4">
        @if($user->id != Auth::user()->id)

        <div class="panel">
                 <ul class="nav nav-pills nav-stacked"> <li class="active"><a href="{{ route('journal.index', $user->id)}}">
                   <i class="fa fa-user"></i> journal</a></li><li><a href="{{ route('journal.index', $user->id)}}"> <i class="fa fa-info-circle"></i>
                     Infos</a></li><li><a href="{{ route('biblio.index', $user->id)}}"> <i class="fa fa-users"></i>Bibliothèque</a></li>





                @if(!is_null(App\Relation::where('id_1',Auth::user()->id)->where('id_2',$user->id)->first() ))
                <li><a href="{{route('relation.delete', $user->id)  }}">
                   <i class="fa fa-edit"></i>
                 Se désabonner </a></li>
                  <li><a href="{{ route('contact',$user->id)}}"><i class="fa fa-edit"></i> Contacter </a></li>
                @elseif(is_null(App\Relation::where('id_1',Auth::user()->id)->where('id_2',$user->id)->first()))
                <li><a href="{{route('relation.create', $user->id)  }}">
                   <i class="fa fa-edit"></i>
                 S'abonner </p></a></li>
                @endif


              </ul></div>

@endif
<!-- Si le journal est propriétaire du user connecté -->
@if(Auth::user()->id==  $user->id)

<div class="panel">
   <ul class="nav nav-pills nav-stacked"> <li class="active"><a href="{{ route('journal.index',Auth::user()->id)}}">
     <i class="fa fa-user"></i>Mon journal</a></li><li><a href="{{ route('journal.index',Auth::user()->id)}}"> <i class="fa fa-info-circle"></i>
       A propos Moi</a></li><li><a href="{{ route('bibliotheque.index')}}"> <i class="fa fa-users"></i>Ma bibliotheque</a></li><li><a href="{{ route('relations')}}">
          <i class="fa fa-file-image-o"></i>Mes relations</a>
</li><li><a href="edit-profile.html">
  <i class="fa fa-edit"></i> Editer mon profil </a></li>
  <li><a href="{{ route('ajouter')}}"><i class="fa fa-edit"></i> Editer ma photo de profil </a></li>

 </ul></div>


@endif
</div>

<div class="profile-info col-md-8"><div class="panel">


  <div style="padding : 10px ; border : 1px #bebebe solid;margin:5px;color:#89817f"> <h1>Nom :   {{$user->nom}}</div>
  <div style="padding : 10px ; border : 1px #bebebe solid;margin:5px;color:#89817f"> <h1>Prenom            :    {{$user->prenom}} </h1></div>
  <div style="padding : 10px ; border : 1px #bebebe solid;margin:5px;color:#89817f"><strong>Date de naissance :</strong> {{ $user->birthday}}</li></div>
  <div style="padding : 10px ; border : 1px #bebebe solid;margin:5px;color:#89817f"> <strong>Lieu de Residence : </strong> {{$user->residence}}</li></div>
  <div style="padding : 10px ; border : 1px #bebebe solid;margin:5px;color:#89817f"> <strong>Fonction          :   </strong> {{$user->fonction}}</li></div>
  <div style="padding : 10px ; border : 1px #bebebe solid;margin:5px;color:#89817f"><strong>Etablissement     :   </strong> {{$user->etablissement}}</li></div>

</div>
</div></div></div></div>
@endsection
