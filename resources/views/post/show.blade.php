<x-app-layout>


    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-4 lg:px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-2xl mb-4">{{ $post->title }}</h1>
                {{-- User Avatar --}}
                <div class="flex gap-4">
                    <x-user-avatar :user="$post->user" />

                    <div>
                        <x-follow-ctr :user="$post->user" class="flex gap-2">
                            <a class="hover:underline" href="{{ route('profile.show',$post->user) }}">{{ $post->user->name }}</a>
                            &middot;
                            <button @click="follow()" 
                                    x-text="following ? 'Unfollow' : 'Follow'"
                                    :class="following ? 'text-red-600':'text-emerald-500'" ></button>
                        </x-follow-ctr>
                        <div class="flex gap-2 text-sm text-gray-500">
                            {{ $post->readTime() }} min read
                            &middot;
                            {{ $post->created_at->format('M d, Y') }}
                        </div>
                    </div>
                    {{-- User Avatar end --}}

                </div>
                {{-- Clap section --}}
                <div class="mt-8 p-4 border-t border-b">
                    <x-clap-button/>
                    
                </div>
                {{-- Clap section end--}}
                {{-- Post Area--}}
                <div class="mt-8">
                    <img src="{{ Storage::url($post->image) }}" class="w-full" alt="{{ $post->title }}">
                    <div class="mt-4">
                        {{ $post->content }}
                    </div>
                </div>
                {{-- Post area ends --}}
                <div class="mt-8 flex gap-2 ">
                    <span class="px-4 py-2 bg-gray-200 rounded-xl">{{ $post->category->name }}</span>
                    <x-clap-button/>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>