@extends('layouts.accueil')

@section('content')
<div class="row text-center cover-container" style="background-color:#00A0B0;margin-top:0px">
     <a href="#">
       <img src="/photos/{{ App\User::where('id',$books->first()->publicateur)->first()->photo }}">
     </a>
     <h1 class="profile-name">{{ App\User::where('id',$books->first()->publicateur)->first()->nom}} {{ App\User::where('id',$books->first()->publicateur)->first()->prenom}}</h1>
     <p class="user-text">sharing awesome ideas with your friends, you can grow, grow fast</p>
   </div>
<div class="profile-info col-md-8"><div class="panel">

 Veuillez Choisir un livre pour le valider et l'echange sera effectué..</br> </br>
  @foreach ($books as $book)
  <article>
<a href="{{ route('biblio.show',['idu'=>$book->publicateur ,'idb' =>$book->id])}}" > TITRE:{{$book->titre}}</a>  </br>
  Auteur:  {{ $book ->auteur}}</br>
 DESCRIPTION:   {{$book->description}} </br> </br>

  </article>
  @endforeach



  </div></div>
@endsection
