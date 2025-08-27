@props(['items' => []])

<div class="py-4">
    @if (!empty($items))
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center gap-2 flex-wrap">
                <!-- Home Link -->
                <li class="flex items-center">
                    <a href="{{ route('admin.dashboard.index') }}" class="text-sm inline-flex items-center gap-2 text-theme-gray font-medium underline">
                        <x-icons.home class="w-4 h-4" />
                        Dashboard
                    </a>
                </li>

                @foreach ($items as $index => $item)
                    <li class="flex items-center gap-2">
                        <x-icons.angle-right class="w-3 h-3 fill-theme-gray" aria-hidden="true" />
                        @if ($index !== count($items) - 1)
                            <a href="{{ $item['href'] }}" class="text-sm inline-flex items-center gap-2 text-theme-gray font-medium underline">
                                {{ $item['text'] }}
                            </a>
                        @else
                            <span class="inline-flex text-sm items-center gap-2 text-theme-gray">
                                {{ $item['text'] }}
                            </span>
                        @endif
                    </li>
                @endforeach
            </ol>
        </nav>
    @endif
</div>
