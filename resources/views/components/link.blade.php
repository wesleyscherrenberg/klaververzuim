@props(['href' => '#', 'class' => ''])

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' =>
            'btn ' . $class
    ]) }}>
    {{ $slot }}
</a>

