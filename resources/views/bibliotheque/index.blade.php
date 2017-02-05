@extends('layouts.profile')

@section('content')








<div class="profile-info col-md-8">
  @foreach ($books as $book)

  <div class="panel panel-info panel-friends" style="border:rgb(200,200,200)"  >
    <div class="panel-heading" style="background-color:rgb(200,200,200)">
				    <h3 class="panel-title" style="color:#00A0B0;font-style:bold;" >
<a href="{{ route('bibliotheque.show',$book->id)}}" > TITRE:{{$book->titre}}</a></h3>
</h3>
</div>
	<div class="panel-body text-center" style="color:#89817f;">
  Auteur:  {{ $book ->auteur}}</br>
  @if($book->description != "")
 Description:   {{$book->description}} </br> </br>
 @endif
</div>
  </div>
  @endforeach
<div class="col-md-6 col-md-offset-4">
  <button type="submit" class="btn btn-primary" style="background-color:#00A0B0;border:none">
<a href="{{ route('bibliotheque.create')}}" style="color:white">
      Ajouter un livre </a>
  </button>
</div>
</div>
@endsection
