@extends('layouts.accueil')
@section('content')




<div class="animated fateIn" style="background-color:rgb(234,234,234)">
    <div class="container container-timeline"  >
<div class="col-md-12 no-paddin-xs" style="margin-top:20px">

@foreach ($notifications as $notification)
<div class="panel panel-white post panel-shadow">
  <div class="post-heading">

      <div class="pull-left meta">
          <div class="title h5">
              <a href="{{ route('journal.index',$notification -> id_1)}}" class="post-user-name">
              {!! $notification->nom !!}  {!! $notification->prenom !!}  </a>
  @if($notification->type=='echange')
 {!!$notification-> notif !!}Si vous acceptez d'effectuer l'echange et choisir un livre,Cliquez sur
<a href="{{ route('validate.accept',$notification -> id_1)}}">
  oui </a> ,Sinon Cliquez sur <a href="{{ route('validate.refuse',$notification -> id_1)}}"> non </a> .
  @endif
  @if($notification->type=='confirmation')
  {!! $notification-> notif  !!}
@endif
@if($notification->type=='refus')
{!! $notification-> notif !!}
@endif
@if($notification->type=='message')
{!! $notification-> notif !!}
@endif
</div>
<p class="text-muted time">{!! $notification->created_at !!}</p>
</div>

</div>
</div>
@endforeach
</div>
</div>
</div>
@endsection
