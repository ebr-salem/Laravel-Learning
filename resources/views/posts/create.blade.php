<x-layout>
    <x-settings heading="Create New Post">
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" />
            <x-form.dropdown name="category_id" :items="$categories" />
            <x-form.input name="thumbnail" type="file" />
            <x-form.textarea name="exerpt" />
            <x-form.textarea name="body" />

            <x-form.button text="publish" />
        </form>
    </x-settings>
</x-layout>
