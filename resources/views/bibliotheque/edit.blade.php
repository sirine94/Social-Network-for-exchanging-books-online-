@extends('layouts.profile')
@section('content')
<div class="profile-info col-md-8">

  <div class="panel" style="padding : 20px;">

<h1> Modifier  {{$book -> titre}}</h1>
{!! Form::model($book,['method' => 'PATCH', 'action'=>['BibliothequeController@update',$book->id]]) !!}
{!! Form::hidden('publicateur',$id) !!}
<div class="form-group">
{!!Form::label('titre','Titre :')!!}
{!! Form::text('titre',null, ['class'=>'form-control'])!!}
</div>

{!!Form::label('auteur','Auteur :')!!}
{!! Form::text('auteur',null, ['class'=>'form-control'])!!}

{!!Form::label('genre','Genre :')!!}
{!! Form::text('genre',null, ['class'=>'form-control'])!!}



{!!Form::label('description','Description :')!!}
{!! Form::textarea('description',null, ['class'=>'form-control'])!!}

{!!Form::submit('Ajouter', ['class'=>'btn btn-primary']) !!}
{!!Form::close()!!}
@if($errors->any())
<ul class="alert alert-danger">
  @foreach($errors->all() as $error )
<li>{{ $error }}</li>
@endforeach
</ul>

@endif



</div></div>

@endsection
