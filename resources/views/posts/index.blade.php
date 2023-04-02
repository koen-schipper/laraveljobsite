<x-layout>
    <h1 class=" mt-0 mb-2 text-3xl font-medium leading-tight mx-4">
        Posts
    </h1>
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">
        @foreach ($posts as $post)
            <x-card class='my-2'>
                <h2 class='mt-0 mb-2 text-xl font-medium leading-tight'>{{ $post['title'] }}</h2>
                <p>{{ $post['body'] }}</p>
            </x-card>
        @endforeach
    </div>
</x-layout>
