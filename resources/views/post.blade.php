<x-layout>
    <div class="container">
        <article>
            <h1>{{ $post->title }}</h1>

            <p>{{ $post->body }}</p>
            <a href="/">Go Back</a>
        </article>
    </div>
</x-layout>
