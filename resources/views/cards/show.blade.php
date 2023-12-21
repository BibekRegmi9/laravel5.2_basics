@extends('layout')
@section('content')
    <h1>{{$card->title}}</h1>
    <ul>
    @foreach($card->notes as $note)
        <li>{{ $note->body }}</li>
    @endforeach
    </ul>
    <hr>
    <h1>Add a new note:</h1>
    <form method="POST" action="/cards/{{ $card->id }}/notes" class="form-signin">
        <div class="form-group">
        <textarea name="body"></textarea>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Note: </button>
        </div>
    </form>
@stop