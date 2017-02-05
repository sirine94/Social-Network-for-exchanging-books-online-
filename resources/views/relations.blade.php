@extends('layouts.app')

@section('content')
@foreach ($relations as $relation)
<article>
<a href="{{ route('journal.index',$relation->id_2)}}" > {{ $relation->nom_2 }} {{ $relation->prenom_2}} </a>

</article>
@endforeach


@endsection
