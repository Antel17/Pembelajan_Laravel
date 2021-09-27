
@extends ('layout/base')

@section('container')
    <article>
        <h2> {{ $post->title }} </h2>
        {!! $post->body !!}
    </article>
@endsection