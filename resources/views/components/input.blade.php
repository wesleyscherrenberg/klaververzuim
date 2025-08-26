@props([
    'type' => 'text',
    'id' => null,
    'name' => null,
    'label' => null,
    'autofocus' => false,
    'class' => '',
    'placeholder' => '',
    'disabled' => false,
    'readonly' => false,
    'value' => null,
    'inputclass' => ''
])

<div class="{{ $class }}">
    @if ($label)
        <x-label for="{{ $id }}">{{ $label }}</x-label>
    @endif
    <div class="flex gap-2">
        <input
            type="{{ $type }}"
            id="{{ $id }}"
            name="{{ $name }}"
            value="{{ old($name, $value) }}"
            class="form-control{{ $inputclass ? ' '. $inputclass : '' }} @error($name) input-error @enderror"
            placeholder="{{ $placeholder }}"
            @if($autofocus) autofocus @endif
            @if($disabled) disabled @endif
            @if($readonly) readonly @endif
            {{ $attributes->except(['type', 'id', 'name', 'value', 'class', 'label', 'placeholder', 'autofocus', 'disabled', 'readonly']) }}
        >
        {{ $slot }}
    </div>
    <x-feedback class="hidden" id="feedback-{{ $id }}"></x-feedback>

    @error($name)
        <x-feedback>{{ $message }}</x-feedback>
    @enderror
</div>
