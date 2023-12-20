<x-layout>
    <div class="container">
        <h1>Category: {{ $category->name }}</h1>

        <div class="posts">
            @if (!count($posts))
                <h2>There is no posts</h2>
            @else
                @foreach ($posts as $post)
                    <article>
                        <a href="/posts/{{ $post->slug }}">
                            <h2>{{ $post->title }}</h2>
                        </a>

                        by <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a>

                        <p>{{ $post->body }}</p>
                    </article>
                @endforeach
            @endif

            <a href="/">Go Back</a>
        </div>
    </div>
</x-layout>
