@props(['type' => 'button', 'class' => ''])

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' =>
            'btn ' . $class
    ]) }}>
    {{ $slot }}
</button>

