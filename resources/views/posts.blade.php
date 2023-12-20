<x-layout>
    <div class="container">
        <div class="posts">
            <h1>Posts</h1>
            @if (count($categories))
                <div class="filters">
                    @foreach ($categories as $category)
                        <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                    @endforeach
                </div>
            @endif

            @foreach ($posts as $post)
                <article>
                    <h1>
                        <a href="/posts/{{ $post->slug }}">{{ $loop->index + 1 }} - {{ $post->title }}</a>
                    </h1>

                    <div>
                        by <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in
                        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </div>

                    <p>{{ $post->body }}</p>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>
