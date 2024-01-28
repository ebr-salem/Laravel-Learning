<x-layout>
    <div class="p-6 m-auto w-1/2">
        <h1 class="text-3xl font-bold mb-6 m-auto w-1/2">Create Post</h1>

        <form method="POST" action="/admin/posts/store" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" />
            <x-form.dropdown name="category_id" :items="$categories" />
            <x-form.input name="thumbnail" type="file" />
            <x-form.textarea name="exerpt" />
            <x-form.textarea name="body" />

            <x-form.button text="publish" />
        </form>
    </div>
</x-layout>
