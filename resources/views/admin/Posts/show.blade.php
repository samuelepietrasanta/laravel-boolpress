@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <h1>{{$post->titolo}}</h1>
            <address>{{$post->autore}}</address>
            <address>{{$post->data}}</address>
            <p>{{$post->contenuto}}</p>
        </div>

        

    </div>
@endsection