<x-layout>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->isEmpty())
            <h1 class="text-3xl text-center">
                There is no posts
            </h1>
        @else
            <x-posts-grid :posts="$posts" />
        @endif
    </main>
</x-layout>
