@extends ("layout/base")
@section('container')
    @foreach ($post as $post)
        <article>
            <h2>
                <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <h5>{{ $post->user->name }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection

