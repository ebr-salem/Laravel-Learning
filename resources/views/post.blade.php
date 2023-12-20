<x-layout>
    <div class="container">
        <article>
            <h1>{{ $post->title }}</h1>

            <div>
                by <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a> in
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </div>

            <p>{{ $post->body }}</p>
            <a href="/">Go Back</a>
        </article>
    </div>
</x-layout>
