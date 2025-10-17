<x-app-layout>


    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-category-tabs />

                </div>
            </div>

            <div class=" text-gray-900 mt-8">
                <div class="p-6">
                    @forelse ($posts as $post)
                    <x-post-item :post="$post"></x-post-item>
                        @empty
                        <p class="text-center py-16 text-gray-400">
                            No Posts Found
                        </p>
                        @endforelse

                </div>
            </div>
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>