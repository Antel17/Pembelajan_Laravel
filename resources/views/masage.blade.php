@extends ("layout/base")
@section('container')
    <h1>Halaman Masage</h1>
    @foreach ($post as $post)
        <article>
            <h2>
                <a href="/post/{{ $post["slug"] }}">{{ $post["artikel"] }}</a>
            </h2>
            <h5>{{ $post["author"] }}</h5>
            <p>{{ $post ["body"] }}</p>
        </article>
    @endforeach
@endsection