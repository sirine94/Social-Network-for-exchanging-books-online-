@extends('layouts.accueil')
@section('content')
<div class="row text-center cover-container" style="background-color:#00A0B0;margin-top:0px">
     <a href="#">
       <img src="/photos/{{ App\User::where('id',$book->publicateur)->first()->photo }}">
     </a>
     <h1 class="profile-name">{{ App\User::where('id',$book->publicateur)->first()->nom}} {{ App\User::where('id',$book->publicateur)->first()->prenom}}</h1>
     <p class="user-text">sharing awesome ideas with your friends, you can grow, grow fast</p>
   </div>
    <div class="container" style="margin-top:0px;margin-left:0px">
      <div class="col-md-10 no-paddin-xs"><div class="row"> <div class="profile-nav col-md-4"><div class="panel">
         <ul class="nav nav-pills nav-stacked"> <li class="active"><a href="{{ route('journal.index',$book->publicateur)}}">
           <i class="fa fa-user"></i> journal</a></li><li><a href="{{ route('journal.index',$book->publicateur)}}"> <i class="fa fa-info-circle"></i>
             Infos</a></li><li><a href="{{ route('biblio.index',$book->publicateur)}}"> <i class="fa fa-users"></i>Bibliothèque</a></li>


        @if(Auth::user()->id== $book->publicateur)

        @elseif(!is_null(App\Relation::where('id_1',Auth::user()->id)->where('id_2',$book->publicateur)->first() ))
        <li><a href="{{route('relation.delete',$book->publicateur)  }}">
           <i class="fa fa-edit"></i>
         Se désabonner </a></li>

        @elseif(is_null(App\Relation::where('id_1',Auth::user()->id)->where('id_2',$book->publicateur)->first()))
        <li><a href="{{route('relation.create', $book->publicateur)  }}">
           <i class="fa fa-edit"></i>
         S'abonner </p></a></li>
        @endif


      </ul></div>
</div>
<div class="profile-info col-md-8">

  <div class="panel panel-info panel-friends" style="border:rgb(200,200,200)"  >
    <div class="panel-heading" style="background-color:rgb(200,200,200)">
      <a href="{{ route('bibliotheque.edit',$book->id)}}" class="pull-right" style="color:#00A0B0;font-style:bold;">Editer ce livre</a>

            <h3 class="panel-title" style="color:#00A0B0;font-style:bold;" >
   TITRE:{{$book->titre}}</h3>
  </div>
  <div class="panel-body text-center" style="color:#89817f;">
  Auteur:  {{ $book ->auteur}}</br>
  @if($book->description != "")
  Description:   {{$book->description}} </br> </br>
  @endif
  </div>



  @if($book->etat == '')

</div>
  <div class="col-md-6 col-md-offset-4">
    <button type="submit" class="btn btn-primary" style="background-color:#00A0B0;border:none">
  <a href="{{ route('validate.termine',$book->id)}}" style="color:white">
        Echanger ce livre </a>
    </button>
 </div>
   @endif
  @if($book->etat != '')
<p style="text-align:center;color:#00A0B0">   Ce livre est {{ $book->etat }}  </br></br></p>

</div>

@endif


  </div>
</div>
</div></div>



@endsection
