@extends('layouts.app')

@section('content')

<header>
    <h1 class="text-center">{{ $post->title }}</h1>
</header>
<div class="container-fluid">

        <div class="clearfix p-4">

            <img class="float-left mr-3" src="{{ $post->url }}" alt="image-preview">
            
            <p >{{ $post->text }}</p>
            <p><strong>Autore:</strong> {{ $post->author }}</p>
            <p ><strong>Creato il:</strong> {{ $post->created_at }}</p>
            <p ><strong>Modificato il:</strong> {{ $post->updated_at }}</p>
        </div>
        
        <footer class="d-flex align-items-center justify-content-end px-5">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Indietro</a>
        </footer>

</div>

@endsection