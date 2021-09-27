
@extends ('layout/base')

@section('container')
<h2> {{ $category }} </h2>
    @foreach ($post as $post)
        <article>
            <a href="/post/{{ $post->slug }}"><p>{{ $post->title }}</p></a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection