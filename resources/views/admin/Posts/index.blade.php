@extends('layouts.app')

@section('content')
    <div class="container p-5">

        <header class="p-3 d-flex justify-content-between">
            <h1>Post pubblicati</h1>
            <a class="btn btn-primary" href="{{route ('admin.posts.create')}}"> Crea un nuovo post</a>
        </header>

        <table class="table table-bordered">
            <thead>
                <th class="col">Titolo</th>
                <th class="col">Di</th>
                <th class="col">Scritto il</th>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td><a href="{{ route('admin.posts.show', $post->id ) }}">{{ $post->titolo }}</a></td>
                        <td>{{ $post->autore}}</td>
                        <td>{{ $post->data}}</td>
                        <td><a class="btn btn-secondary" href="{{route('admin.posts.edit' , $post->id)}}"> Modifica</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Non ci sono post da visualizzare</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        

    </div>
@endsection