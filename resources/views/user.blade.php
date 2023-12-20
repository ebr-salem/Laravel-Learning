<x-layout>
    <div class="container">
        <h1>Author: {{ $user->name }}</h1>

        <div class="posts">
            @foreach ($posts as $post)
                <article>
                    <h1>
                        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                    </h1>

                    <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>

                    <p>{{ $post->body }}</p>
                </article>
            @endforeach

            <a href="/">Go Back</a>
        </div>
    </div>
</x-layout>
