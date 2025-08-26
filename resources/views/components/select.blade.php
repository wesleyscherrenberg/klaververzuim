@props(['id', 'label', 'name'])

<div>
    @if(!empty($label))
        <x-label for="{{ $id }}">{{ $label }}</x-label>
    @endif

    <select
        id="{{ $id }}"
        name="{{ $name }}"
        class="form-control select @error($name) input-error @enderror {{ $attributes->get('class') }}"
        {{ $attributes }}
    >
        {{ $slot }}
    </select>

    @error($name)
        <x-feedback>{{ $message }}</x-feedback>
    @enderror
</div>
