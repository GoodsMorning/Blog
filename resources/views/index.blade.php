<x-layout>
    @foreach ($posts as $post)
        <article>
            <a href="/post/{{ $post->slug }} ">
                <h1>
                    {{ $post->title }}
                </h1>
            </a>
            <p>
                by <a href="/author/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>
            <div>
                {!! $post->excerpt !!}
            </div>
        </article>
    @endforeach
</x-layout>

{{-- top > dowm --}}
