

@if($post->exists) 
<form action="{{ route('admin.posts.update', $post) }}" method="POST">
@method('PUT')
@else
<form action="{{ route('admin.posts.store') }}" method="POST">

@endif


        @csrf
        <div class="row">
            <div class="col-12">
                <form>

                    <div class="form-group">
                      <label for="title">Titolo</label>
                      <input type="text" class="form-control" id="title" name="title" required minlength="5" maxlength="50" value="{{  $post->title, old('title') }}">
                    </div>
                </div>
                   <div class="col-12">
                    <div class="form-group">
                        <label for="content">Contenuto</label>
                        <textarea type="text" class="form-control" id="content" name="text"  cols="30" rows="10">{{  $post->text, old('text') }}</textarea>
                      </div>
                   </div>
                    <div class="col-11">
                        <div class="form-group">
                            <label for="url">Immagine</label>
                            <input type="url" class="form-control" id="url" name="url" value="{{ $post->url, old('url') }}">
                          </div>
                    </div>
                    <div class="col-1">
                       <img class="img-fluid" src="{{ $post->url ?? 'https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png' }}" alt="preview" id="preview">
                    </div>
                    
        </div>
        <footer class="d-flex justify-content-between">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Indietro</a>
            <button class="btn btn-success" type="submit">Salva</button>
        </footer>
        </form>