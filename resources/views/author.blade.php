<x-layout>
    <div class="container">
        <h1>Author: {{ $author->name }}</h1>

        <div class="posts">
            @if (!count($posts))
                <h2>There is no posts</h2>
            @else
                @foreach ($posts as $post)
                    <article>
                        <h1>
                            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                        </h1>

                        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>

                        <p>{{ $post->body }}</p>
                    </article>
                @endforeach
            @endif

            <a href="/">Go Back</a>
        </div>
    </div>
</x-layout>
