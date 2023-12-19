<x-layout>
    <div class="container">
        <div class="posts">
            <h1>Posts</h1>
            @if (count($categories))
                <div class="filters">
                    @foreach ($categories as $category)
                        <a href="/posts?category_id={{ $category->id }}">{{ $category->name }}</a>
                    @endforeach
                </div>
            @endif
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
