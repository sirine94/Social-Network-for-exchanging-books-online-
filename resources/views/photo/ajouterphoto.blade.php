@extends('layouts.profile')

@section('content')
<div class="profile-info col-md-8">

  <div class="panel" style="padding : 20px;">

<div>
<div class="about-section">
   <div class="text-content">
     <div class="span7 offset1">
        @if(Session::has('success'))
          <div class="alert-box success">
          <h2>{!! Session::get('success') !!}</h2>
        </div>
        @endif

        {!! Form::open(array('route'=>'ajouter.valider','method'=>'POST', 'files'=>true)) !!}
         <div class="control-group">
          <div class="controls">
          {!! Form::file('image',['class'=>'form-control'] )!!}
      <p class="errors">{!!$errors->first('image')!!}</p>
    @if(Session::has('error'))
    <p class="errors">{!! Session::get('error') !!}</p>
    @endif
        </div>
        </div>
        <div id="success"> </div>
      {!! Form::submit('Envoyer', array('class'=>'btn btn-primary')) !!}
      {!! Form::close() !!}
      </div>
   </div>
</div>
</div>
</div>
</div>
@endsection
