@props(['comment'])

<article class="border border-gray-200 bg-gray-100 rounded col-span-8 col-start-5 mt-3 p-6 flex gap-3">
    <div class="flex-shrink-0">
        <img class="rounded-full" width="60" height="60" src="https://picsum.photos/80/80?u={{ $comment->id }}" alt="{{ $comment->author->name }}">
    </div>

    <div>
        <header class="mb-3">
            <h3 class="font-bold">{{ $comment->author->name }}</h3>
            <p class="text-xs text-gray-500">
                Posted
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </header>

        <p class="text-sm">
            {{ $comment->body }}
        </p>
    </div>
</article>
