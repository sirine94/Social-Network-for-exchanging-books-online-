@extends('layouts.accueil')
@section('content')
<div class="row text-center cover-container" style="background-color:#00A0B0;margin-top:0px">
     <a href="#">
       <img src="/photos/{{ App\User::where('id',$books->first()->publicateur)->first()->photo }}">
     </a>
     <h1 class="profile-name">{{ App\User::where('id',$books->first()->publicateur)->first()->nom}} {{ App\User::where('id',$books->first()->publicateur)->first()->prenom}}</h1>
     <p class="user-text">sharing awesome ideas with your friends, you can grow, grow fast</p>
   </div>
    <div class="container" style="margin-top:0px;margin-left:0px">
      <div class="col-md-10 no-paddin-xs"><div class="row"> <div class="profile-nav col-md-4"><div class="panel">
         <ul class="nav nav-pills nav-stacked"> <li class="active"><a href="{{ route('journal.index',$books->first()->publicateur)}}">
           <i class="fa fa-user"></i> journal</a></li><li><a href="{{ route('journal.index',$books->first()->publicateur)}}"> <i class="fa fa-info-circle"></i>
             Infos</a></li><li><a href="{{ route('biblio.index',$books->first()->publicateur)}}"> <i class="fa fa-users"></i>Bibliothèque</a></li>


        @if(Auth::user()->id== $books->first()->publicateur)

        @elseif(!is_null(App\Relation::where('id_1',Auth::user()->id)->where('id_2',$books->first()->publicateur)->first() ))
        <li><a href="{{route('relation.delete',$books->first()->publicateur)  }}">
           <i class="fa fa-edit"></i>
         Se désabonner </a></li>

        @elseif(is_null(App\Relation::where('id_1',Auth::user()->id)->where('id_2',$books->first()->publicateur)->first()))
        <li><a href="{{route('relation.create', $books->first()->publicateur)  }}">
           <i class="fa fa-edit"></i>
         S'abonner </p></a></li>
        @endif


      </ul></div>
</div>




<div class="profile-info col-md-8">
  @foreach ($books as $book)

  <div class="panel panel-info panel-friends" style="border:rgb(200,200,200)"  >
    <div class="panel-heading" style="background-color:rgb(200,200,200)">
				    <h3 class="panel-title" style="color:#00A0B0;font-style:bold;" >
<a href="{{  route('biblio.show',['idu'=>$book->publicateur ,'idb' =>$book->id])}} " > TITRE:{{$book->titre}}</a></h3>
</h3>
</div>
	<div class="panel-body text-center" style="color:#89817f;">
  Auteur:  {{ $book ->auteur}}</br>
  @if($book->description != "")
 Description:   {{$book->description}} </br> </br>1
 @endif
</div>
  </div>
  @endforeach
</div> </div></div></div>
@endsection
