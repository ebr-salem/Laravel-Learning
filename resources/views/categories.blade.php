<x-layout>
    <div class="container">
        <h1>Category: {{ $category->name }}</h1>

        <div class="posts">
            @foreach ($posts as $post)
                <article>
                    <a href="/posts/{{ $post->slug }}">
                        <h2>{{ $post->title }}</h2>
                    </a>

                    <p>{{ $post->body }}</p>
                </article>
            @endforeach

            <a href="/">Go Back</a>
        </div>
    </div>
</x-layout>
