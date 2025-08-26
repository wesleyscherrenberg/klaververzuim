@props([
    'type' => 'primary', // Standaard variant
    'status' => ''
])

@php
    $types = [
        'primary' => [
            'class' => 'alert-primary',
            'icon' => 'icons.info',
        ],
        'success' => [
            'class' => 'alert-success',
            'icon' => 'icons.circle-check',
        ],
        'danger' => [
            'class' => 'alert-danger',
            'icon' => 'icons.error',
        ],
    ];
    $alert = $types[$type] ?? $types['primary'];
@endphp

@if($status)
<div {{ $attributes->merge(['class' => 'alert ' . $alert['class']]) }}>
    <x-dynamic-component :component="$alert['icon']" class="mt-1 flex-none" />
    {!!  $status  !!}
</div>
@endif
