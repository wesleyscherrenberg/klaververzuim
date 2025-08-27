@props([
    'id' => '',
    'name' => '',
    'label' => '',
    'value' => '',
    'placeholder' => '',
    'error' => '',
    'rows' => '10',
    'class' => ''
])

<div>
    <x-label for="{{ $id }}">{{ $label }}</x-label>
    <textarea
        id="{{ $id }}"
        name="{{ $name }}"
        rows="{{$rows}}"
        class="form-control py-3 {{ $class }} @error($name) input-error @enderror"
        placeholder="{{ $placeholder }}"
    >{{ $value }}</textarea>

    <x-feedback class="hidden" id="feedback-{{ $id }}"></x-feedback>
    @error($name)
        <x-feedback>{{ $message }}</x-feedback>
    @enderror
</div>
