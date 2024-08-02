@extends('base')

@section('title', 'Modifier le post')

@section('excerpt')
    <h1>Modifier le post</h1>

    <form method="POST" action="{{ route('blog.update', ['id' => $post->id]) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" value="{{ $post->slug }}" required>
        </div>

        <div class="form-group">
            <label for="excerpt">Résumé</label>
            <textarea name="excerpt" id="excerpt" class="form-control" required>{{ $post->excerpt }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
