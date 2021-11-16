@extends('layouts.app')

@section('content')


<div class="container">

    <header class="d-flex justify-content-between">
        <h1>Modifica il post " {{$post->titolo}} "</h1>
        <a class="btn btn-primary" href="{{route('admin.posts.index')}}"> Torna alla lista dei post</a>

    </header>
    

    <form action="{{route('admin.posts.update' , $post)}}" method="post" >
        @method('patch')
        @csrf
        <label for="autore" class="form-label">Nome autore</label>
        <input class="form-control mb-4" type="text" id="autore" name="autore" placeholder="Inserisci l'autore" value="{{$post->autore}}" required></input>

        <label for="titolo" class="form-label">Titolo post</label>
        <input class="form-control mb-4" type="text" id="titolo" name="titolo" placeholder="Inserisci il titolo" value="{{$post->titolo}}" required></input>

        <label for="contenuto" class="form-label">Contenuto post</label>
        <input class="form-control mb-4" type="text" id="contenuto" name="contenuto" placeholder="Inserisci il contenuto principale" value="{{$post->contenuto}}" required></input>

        <label for="data" class="form-label">Data di pubblicazione</label>
        <input  class="form-control mb-4" type="date" id="data" name="data" placeholder="Inserisci la data" value="{{$post->data}}" required></input>
   
        <div>
            <button type="reset" class="btn btn-danger">Cancella tutto</button>
            <button type="submit" class="btn btn-success">Conferma la modifica</button>
        </div>
    </form>


</div>


@endsection