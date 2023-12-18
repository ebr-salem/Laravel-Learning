<x-layout>
    <div class="container">
        <article>
            <h1>{{ $post->title }}</h1>

            {!! $post->body !!}
            <a href="/">Go Back</a>
        </article>
    </div>
</x-layout>
