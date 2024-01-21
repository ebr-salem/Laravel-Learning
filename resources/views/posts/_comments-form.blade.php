
@auth
<form method="POST" action="/posts/{{ $post->slug }}/comment/store">
    @csrf

    <article class="border border-gray-200 bg-gray-100 rounded col-span-8 col-start-5 mt-3 p-6 flex gap-3">
        <div class="flex-shrink-0">
                <img class="rounded-full" width="60" height="60" src="https://picsum.photos/80/80?u={{ auth()->user()->id }}" alt="{{ auth()->user()->name }}">
        </div>

        <div>
            <header class="mb-3">
                <h3 class="font-bold">{{ auth()->user()->name }}</h3>
            </header>

            <div>
                <textarea class="focus:outline-none py-1 px-3" name="body" id="body" cols="50" rows="3" placeholder="write something to {{ $post->author->name }}" required ></textarea>

                @error('body')
                    <div class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="flex w-1/4 justify-center rounded-full bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send</button>
            </div>
        </div>
    </article>
</form>
@endauth