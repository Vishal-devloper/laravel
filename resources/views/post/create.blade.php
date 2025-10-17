<x-app-layout>


    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-4 lg:px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- Image --}}
                    <div>
                        
                        <x-input-label for="image" :value="__('Image')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"
                              ></x-text-input>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>
                    
                    {{-- Title --}}
                    <div class="mt-4">
                        
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                              autofocus  >{{ old('title') }}</x-text-input>
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
                    {{-- Category --}}
                    <div class="mt-4">
                        
                        <x-input-label for="category_id" :value="__('Category')" />
                        <select name="category_id" id="category_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id')==$category->id)>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </div>
                    {{-- Content --}}
                    <div class="mt-4">
                        
                        <x-input-label for="content" :value="__('Content')" />
                        <x-input-textarea id="content" class="block mt-1 w-full" name="content"
                                >{{ old('content') }}</x-input-textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>
                    <x-primary-button class="mt-4">Submit</x-primary-button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>