@props([
    'id' => null,
    'class' => ''
])

<div @if($id) id="{{ $id }}" @endif class="feedback {{$class}}">{{ $slot }}</div>
