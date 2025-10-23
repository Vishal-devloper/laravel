@props(['disabled' => false, 'value' => ''])

<input {{ $attributes->merge([
        'value' => $value,
        'class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'
    ]) }}
    @disabled($disabled) />
