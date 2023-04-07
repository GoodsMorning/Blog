{{-- @extends('layout')

@section('content')
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            {!! $post->body !!}
        </p>

    </article>

    <a href="/">Back Home</a>
@endsection
down > top --}}

<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            by <a href="#">Krit</a> in <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>
        <div>
            {!! $post->body !!}
        </div>
    </article>
    <a href="/">Back Home</a>
</x-layout>
