@props(['user'])
@if ($user->image)
    <img src="{{$user->imageUrl() }}" alt="{{ $user->name }}" class="rounded-full w-20 h-20">
@else
    <img src="https://cdn-icons-png.flaticon.com/512/219/219988.png" alt="" class="rounded-full w-20 h-20">
@endif