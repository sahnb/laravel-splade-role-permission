@props(['active', 'as' => 'Link'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
                : 'group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-chestnut-600 hover:bg-chestnut-50 hover:text-chestnut-900';
@endphp

<{{ $as }} {{ $attributes->class($classes) }}>
{{ $slot }}
</{{ $as }}>
