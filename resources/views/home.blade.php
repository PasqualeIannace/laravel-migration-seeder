@extends('layouts.app')

@section('content')

<h1>Treni in partenza</h1>
@foreach ($inPartenza as $train)
<div>
    <h3>{{$train->azienda}}</h3>
    <p>da {{$train->stazione_di_partenza}} a {{$train->stazione_di_arrivo}}</p>
    <p>partenza alle: {{$train->orario_di_partenza}} arrivo alle: {{$train->orario_di_arrivo}}</p>
    <p>Treno n{{$train->codice_treno}}</p>
</div>
@endforeach
@endsection