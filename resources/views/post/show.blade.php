<x-app-layout>


    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-4 lg:px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-2xl mb-4">{{ $post->title }}</h1>
                <div class="flex gap-4">
                    @if ($post->user->image)
                        <img src="{{Storage::url($post->user->image) }}" alt="{{ $post->user->name }}" class="rounded-full w-20 h-20">
                    @else
                        <img src="https://cdn-icons-png.flaticon.com/512/219/219988.png" alt="" class="rounded-full w-20 h-20">
                    @endif
                    <div>
                        <h3>{{ $post->user->name }}</h3>
                        <div class="flex gap-2 text-sm text-gray-500">
                            {{ $post->readTime() }} min read
                            &middot;
                            {{ $post->created_at->format('M d, Y') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>