<ul class="flex justify-center flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400">

    <li class="me-2">
        <a href="/" class="{{ request('category')?'inline-block px-4 py-3 rounded-lg hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-300 dark:hover:text-white':'inline-block py-3 px-4 text-white bg-blue-600 rounded-lg active' }} ">All</a>
    </li>
    @foreach ($categories as $category)
        <li class="me-2">
            <a href="{{ route('post.byCategory',$category) }}"
                class="{{ Route::currentRouteNamed('post.byCategory') && request('category')->id == $category->id ? 'inline-block py-3 px-4 text-white bg-blue-600 rounded-lg active':'inline-block px-4 py-3 rounded-lg hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-300 dark:hover:text-white'}}">{{ $category->name }}</a>
        </li>
    @endforeach


</ul>