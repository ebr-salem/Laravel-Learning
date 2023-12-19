<x-layout>
    <div class="container">
        <div class="posts">
            <h1>Posts</h1>
            @foreach ($posts as $post)
                <article>
                    <h1>
                        <a href="/posts/{{ $post->slug }}">{{ $loop->index + 1 }} - {{ $post->title }}</a>
                    </h1>

                    <p>{{ $post->body }}</p>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>
