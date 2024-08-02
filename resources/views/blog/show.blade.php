@extends('base')

@section('title', $post->title)

@section('excerpt')
    <article>
        <h2>{{$post->title}}</h2>
        <p>
            {{$post->excerpt}}
        </p>
    </article>
@endsection
