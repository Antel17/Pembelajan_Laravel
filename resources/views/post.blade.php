
@extends ('layout/base')

@section('container')
    <article>
        <h2> {{ $post['artikel'] }} </h2>
        <h5> {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>
@endsection