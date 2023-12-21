@extends('layout')

@section('content')
    <h1>All Cards: </h1>

    @foreach($cards as $card)
        <div>
{{--            Method 1:--}}
            <a href="/cards/{{ $card->id }}">{{$card->title}}</a>

{{--            Method 2: for complicated path(deep nested url ::NOTE(The method path should be defined inside the model Card which gives the exact path))--}}
{{--            <a href="{{ $card->path() }}">{{$card->title}}</a>--}}
        </div>
    @endforeach
@stop