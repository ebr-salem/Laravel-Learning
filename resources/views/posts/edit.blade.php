<x-layout>
    <x-settings>
        <form method="POST" action="{{ route('posts.update', $post->slug) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="$post->title" />
            <x-form.dropdown name="category_id" :items="$categories" :selected="$post->category" />
            <x-form.input name="thumbnail" type="file" :value="$post->thumbnail" />
            <x-form.textarea name="exerpt" :value="$post->exerpt" />
            <x-form.textarea name="body" :value="$post->body" />

            <x-form.button text="update" />
        </form>
        <form method="POST" action="{{ route('posts.delete', $post->slug) }}">
            @csrf
            @method('DELETE')

            <x-form.button text="delete" color="red" />
        </form>
    </x-settings>
</x-layout>
