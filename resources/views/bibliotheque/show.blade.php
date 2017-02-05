@extends('layouts.profile')
@section('content')
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

   @endif
  @if($book->etat != '')
<p style="text-align:center;color:#00A0B0">   Ce livre est {{ $book->etat }}  </br></br></p>

</div>
 <div class="col-md-6 col-md-offset-4">
   <button type="submit" class="btn btn-primary" style="background-color:#00A0B0;border:none">
 <a href="{{ route('validate.termine',$book->id)}}" style="color:white">
       Echange terminée </a>
   </button>
</div>
@endif


  </div>
@endsection
