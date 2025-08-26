@props([
    'id',
    'title' => null,
    'class' => 'max-w-lg',
])

<div id="{{ $id }}"
     class="modal-bg fixed inset-0 !m-0 z-50 hidden items-start justify-center h-screen overflow-y-auto bg-black bg-opacity-40 p-2 lg:py-16"
     aria-hidden="true">
    <div class="modal-content bg-white rounded-lg shadow-lg w-full {{ $class }} relative"
         tabindex="-1" role="dialog" aria-modal="true">
        <button type="button" class="absolute top-2 right-3 text-2xl text-gray-400 hover:text-gray-600"
                onclick="hideModal('{{ $id }}')" aria-label="Sluiten">
            &times;
        </button>
        @if($title)
            <div class="px-6 pt-5 text-lg font-semibold">{{ $title }}</div>
        @endif
        <div class="px-6 py-4">
            {{ $slot }}
        </div>
    </div>
</div>
