@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{!! __('Pagination Navigation') !!}" class="flex justify-center items-center gap-2 select-none text-xs">
        {{-- Vorige --}}
        @if ($paginator->onFirstPage())
            <x-button class="btn-white btn-xs text-theme-gray-darker" disabled type="button">
                <x-icons.angle-left class="w-4 h-4" />
            </x-button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}">
                <x-button class="btn-white btn-xs text-theme-gray-darker" type="button">
                    <x-icons.angle-left class="w-4 h-4" />
                </x-button>
            </a>
        @endif

        {{-- Pagina-indicator --}}
        <span class="px-2 py-1 text-theme-gray-darker bg-theme-light rounded text-xs">
            {{ $paginator->currentPage() }} / {{ $paginator->lastPage() }}
        </span>

        {{-- Volgende --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}">
                <x-button class="btn-white btn-xs text-theme-gray-darker" type="button">
                    <x-icons.angle-right class="w-4 h-4" />
                </x-button>
            </a>
        @else
            <x-button class="btn-white btn-xs text-theme-gray-darker" disabled type="button">
                <x-icons.angle-right class="w-4 h-4" />
            </x-button>
        @endif
    </nav>
@endif
