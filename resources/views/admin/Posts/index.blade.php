@extends('layouts.app')

@section('content')
    <div class="container p-5">

        <header class="p-3">
            <h1>Post pubblicati</h1>
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