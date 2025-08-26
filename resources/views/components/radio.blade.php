@props([
    'id' => '',
    'name' => '',
    'label' => '',
    'checked' => false,
    'value' => '',
])

<div>
    <div class="flex justify-start">
        <div class="relative flex-none flex w-5 h-5 rounded-full border border-theme-primary justify-center items-center">
            <input
                type="radio"
                id="{{ $id }}"
                name="{{ $name }}"
                value="{{ $value }}"
                class="hidden peer"
                {{ $checked ? 'checked' : '' }}
            >
            <div class="absolute inset-0 bg-white rounded-full  transition-colors"></div>
            <!-- Actieve dot bij checked -->
            <div class="absolute w-3 h-3 rounded-full bg-theme-primary hidden peer-checked:block pointer-events-none"></div>
        </div>
        <label for="{{ $id }}" class="ms-2 text-sm text-theme-gray-darker cursor-pointer select-none">
            {{ $slot->isNotEmpty() ? $slot : $label }}
        </label>
    </div>
    @error($id)
    <div class="feedback">{{ $message }}</div>
    @enderror
</div>
