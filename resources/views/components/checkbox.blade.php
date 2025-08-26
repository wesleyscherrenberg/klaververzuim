@props([
    'id' => '',
    'name' => '',
    'label' => '',
    'checked' => false,
    'value' => 'on',
])

<div>
    <div class="flex justify-start">
        <div class="relative flex-none flex w-5 h-5 border border-theme-primary justify-center items-center">
            <input
                type="checkbox"
                id="{{ $id }}"
                name="{{ $name }}"
                class="hidden peer"
                {{ $checked ? 'checked' : '' }}
                value="{{ $value }}"
            >
            <!-- Visuele achtergrond -->
            <div class="absolute inset-0 bg-white peer-checked:bg-theme-primary pointer-events-none"></div>
            <!-- Klikbare overlay (onzichtbaar) -->
            <label for="{{ $id }}" class="absolute inset-0 cursor-pointer"></label>
            <x-icons.check class="absolute w-4 h-4 fill-white hidden peer-checked:block pointer-events-none" />
        </div>
        <label for="{{ $id }}" class="ms-2 text-sm text-theme-gray-darker cursor-pointer select-none">
            {{ $slot->isNotEmpty() ? $slot : $label }}
        </label>
    </div>
    <x-feedback class="hidden" id="feedback-{{ $id }}"></x-feedback>
    @error($id)
    <div class="feedback">{{ $message }}</div>
    @enderror
</div>
