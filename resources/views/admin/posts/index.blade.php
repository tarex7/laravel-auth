@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <header>
        <h1>Lista post</h1>
    </header>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Creato</th>
            <th scope="col">ultima modifica</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @dump($posts)
            @forelse ($posts as $post)
            <tr>
              <th scope="row">{{ $post->id}}</th>
              <td>{{ $post->id}}</td>
              <td>{{ $post->title}}</td>
              <td>{{ $post->author}}</td>
              <td>@{{ $post->created_at}}</td>
              <td>@{{ $post->updated_at}}</td>
            </tr>
                
            @empty
                <tr><td colspan=6><h3 class="text-center">Nessun post da mostrare</h3></td></tr>
            @endforelse
         
        </tbody>
      </table>
</div>
@endsection