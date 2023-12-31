<div class="inline-block text-left w-2xl relative" x-data="{ show: false }" @click.away="show = false">
    <button class="bg-gray-100 inline-flex pr-24 py-1 relative rounded-full w-full" @click="show = !show">
        {{ $current ? ucwords($current->name) : 'Categories' }}

        <svg class="transform -rotate-90 absolute right-0 pointer-events-none" style="right: 12px;" width="22"
            height="22" viewBox="0 0 22 22">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                </path>
                <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                </path>
            </g>
        </svg>
    </button>

    <div class="options bg-gray-300 rounded w-full absolute z-50 max-h-80 overflow-auto" style="display: none"
        x-show="show">
        @php
            $activeClass = 'bg-blue-700 text-white';
        @endphp

        <a href="/"
            class="pl-1 block w-full hover:bg-blue-700 hover:text-white text-left {{ request('category') == '' ? $activeClass : '' }}">All</a>

        @foreach ($categories as $category)
            <a href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}"
                class="pl-1 block w-full hover:bg-blue-700 hover:text-white text-left {{ $current == $category ? $activeClass : '' }}">{{ ucwords($category->name) }}</a>
        @endforeach
    </div>
</div>
