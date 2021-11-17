@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1>Benvenuto!</h1>
            <h2>Qui sotto trovi il link per visualizzare tutti i nostri post</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <a href="{{route('admin.posts.index')}}">
                <button class="button"><span> VAI AI POST </span></button>
            </a>
        </div>
    </div>
    
</div>
@endsection
