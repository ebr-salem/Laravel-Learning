<div class="p-6 m-auto w-3/4">
    <h1 class="text-3xl text-center font-bold mb-6 m-auto w-1/2">Create Post</h1>

    <div class="flex justify-between gap-12">
        <aside class="p-4">

            <h1 class="text-bold text-2xl mb-3">
                Settings
            </h1>

            <ul>
                {{-- <x-settings-link name="dashbord" to="dashbord" /> --}}
                <x-settings-link :href="route('posts.create')" :active="request()->routeIs('posts.create')" name="new post" />
                <x-settings-link :href="route('home')" :active="request()->routeIs('posts.edit')" name="edit post" />
            </ul>
        </aside>

        <div class="w-full">
            {{ $slot }}
        </div>
    </div>
</div>
