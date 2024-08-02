@extends('base')

@section('title', 'Accueil du blog concernant mes projets')

@section('excerpt')
    <h1>Mes Projets</h1>

    @foreach($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <p>
                {{ $post->excerpt }}
            </p>
            <p>
                <a href="{{ route('blog.show', ['slug' => $post->slug, 'id' => $post->id]) }}" class="btn btn-primary">Lire la suite</a>
                <a href="{{ route('blog.edit', ['id' => $post->id]) }}" class="btn btn-secondary">Modifier</a>
            </p>
        </article>
    @endforeach

    {{ $posts->links() }}
@endsection
