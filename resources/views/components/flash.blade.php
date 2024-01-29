@if (session()->has('success') || session()->has('error'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="bg-{{ session()->has('success') ? 'blue' : 'red' }}-500 bottom-3 fixed p-5 right-3 rounded-full text-white">
        <p>
            {{ session('success') ?? session('error') }}
        </p>
    </div>
@endif
