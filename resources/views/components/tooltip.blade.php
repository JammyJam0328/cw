@props(['title','align','color'])
@php
$color = $color ?? 'dark';
$availableColors = ['light','dark'];
$color = in_array($color,$availableColors) ? $color : 'light' ;
$align = $align ?? 'top';
@endphp

@php
$textColor = $color == 'light' ? 'text-gray-900' : 'text-white';
$bodyColor = $color == 'light' ? 'bg-white' : 'bg-gray-800';
@endphp

<div x-data x-id="['tooltip']" class="relative group">
    {{ $slot }}
    <div
        class="rounded-lg hidden group-hover:block absolute {{ $textColor }} top-0 -left-20 {{ $bodyColor }} z-50 border p-1">
        {{ $title }}
    </div>
</div>