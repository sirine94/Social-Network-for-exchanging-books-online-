@extends('layouts.accueil')

@section('content')

          <div class="row text-center cover-container" style="background-color:#00A0B0;margin-top:0px">
               <a href="#">
                 <img src="/photos/{{ $user->photo }}">
               </a>
               <h1 class="profile-name">{{ $user->nom}} {{ $user->prenom}}</h1>
               <p class="user-text">sharing awesome ideas with your friends, you can grow, grow fast</p>
             </div>
              <div class="container" style="margin-top:0px;margin-left:0px">
                <div class="col-md-10 no-paddin-xs"><div class="row"> <div class="profile-nav col-md-4"><div class="panel">
                   <ul class="nav nav-pills nav-stacked"><li> <a href="{{ route('journal.index',$user->id)}}">
                     <i class="fa fa-user"></i> journal</a></li><li><a href="{{ route('journal.index',$user->id)}}"> <i class="fa fa-info-circle"></i>
                       Infos</a></li><li><a href="{{ route('biblio.index',$user->id)}}"> <i class="fa fa-users"></i>Bibliothèque</a></li>


                               @if(Auth::user()->id== $user->id)

                               @elseif(!is_null(App\Relation::where('id_1',Auth::user()->id)->where('id_2',$user->id)->first() ))
                               <li><a href="{{route('relation.delete',$user->id)  }}">
                                  <i class="fa fa-edit"></i>
                                Se désabonner </a></li>
                               <li class="active"><a href="{{route('contact',$user->id)  }}">
                                   <i class="fa fa-edit"></i>
                                 Contacter </a>
                               @elseif(is_null(App\Relation::where('id_1',Auth::user()->id)->where('id_2',$user->id)->first()))
                               <li><a href="{{route('relation.create', $user->id)  }}">
                                  <i class="fa fa-edit"></i>
                                S'abonner </p></a></li>
                               @endif




                </ul></div>
          </div>




          <div class="profile-info col-md-8">


{{ Form::open(array('route' => 'contact.store', 'method' => 'post')) }}
{!! Form::text('message',null, ['class'=>'form-control input-lg p-text-area','placeholder'=>'Ecrire un Message...','rows'=>'3'])!!}
{!! Form::hidden('id_1',\Auth::user()->id) !!}
{!! Form::hidden('id_2',$user->id) !!}
{!! Form::hidden('nom',\Auth::user()->nom) !!}
{!! Form::hidden('prenom',\Auth::user()->prenom) !!}
{!! Form::hidden('nom_2',$user->nom) !!}
{!! Form::hidden('prenom_2',$user->prenom) !!}
<div class="panel-footer">

{!! Form::submit('Envoyer', ['class'=>'btn btn-info pull-right']) !!}
<ul class="nav nav-pills">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>

{!!Form::close()!!}
</div>

             <div class="chat-message" style="background-color:rgb(234,234,234)" >
                 <ul class="chat" style="background-color:rgb(234,234,234)">
@foreach($messages as $message)
@if($message->id_1==$user->id)
<li class="left clearfix">
                       <span class="chat-img pull-left">
                         <img src="/photos/{{ $user->photo}}" alt="User Avatar">
                       </span>
                       <div class="chat-body clearfix">
                         <div class="header">
                           <strong class="primary-font">{!! $user->nom !!} {!! $user->prenom !!}</strong>
                           <small class="pull-right text-muted"><i class="fa fa-clock-o"></i>{{  $message->created_at }}</small>
                         </div>
                         <p>
                      {{ $message->message}}
                         </p>
                       </div>
                     </li>

@endif
@if($message->id_1==Auth::user()->id)
<li class="right clearfix">
                       <span class="chat-img pull-right">
                         <img src="/photos/{{ Auth::user()->photo }}" alt="User Avatar">
                       </span>
                       <div class="chat-body clearfix">
                         <div class="header">
                           <strong class="primary-font">{!! Auth::user()->nom !!} {!! Auth::user()->prenom !!} </strong>
                           <small class="pull-right text-muted"><i class="fa fa-clock-o"></i>{{$message->created_at }}</small>
                         </div>
                         <p>
                           {!! $message->message !!}
                         </p>
                       </div>
                     </li>

@endif

@endforeach


</div></div></div> </div></div></div></div></div></div>
@endsection
