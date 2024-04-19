@props(['active' => false])

@php
    $classes = 'block text-center px-3 text-sm leading-6 hover:bg-orange-400 focus:bg-orange-400 hover:text-white focus:text-white';

    if ($active) $classes .= ' bg-orange-500 text-white';
@endphp

<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a>
