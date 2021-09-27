
@extends ('layout/base')

@section('container')
    <article>
        <h2> {{ $post->title }} </h2>
        <p>By. {{ $post->user->name }} <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
@endsection