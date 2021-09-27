
@extends ('layout/base')

@section('container')
    <article>
        <h2> {{ $post->title }} </h2>
        <a href="/category/{{ $post->category->slug }}"><p>{{ $post->category->name }}</p></a>
        {!! $post->body !!}
    </article>
@endsection