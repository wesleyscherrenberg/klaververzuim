@extends('layouts.default')

@section('default')
        <!-- Sidebar -->
        <nav id="sidebar" class="fixed top-0 left-0 bottom-0 w-64 z-30 bg-theme-primary text-theme-gray-lightest shadow-lg transition-transform transform -translate-x-64 xl:translate-x-0 xl:block">
            <div class="h-full flex flex-col space-y-4 py-6 overflow-auto px-4">
                <div class="mb-6">
                    <div class="text-lg font-semibold text-ellipsis whitespace-nowrap overflow-hidden">
                        {{ auth()->user()->name }}
                    </div>
                    <div class="text-theme-gray-lighter text-sm whitespace-nowrap overflow-hidden text-ellipsis">
                        {{ auth()->user()->is_admin ? 'Beheerder' : auth()->user()->company?->name ?? '-'  }}
                    </div>
                </div>

                <ul class="flex-1 flex flex-col gap-1">
                    <li>
                        <a href="{{ route('admin.dashboard.index') }}"
                           class="sidebar-link {{ Route::is('admin.dashboard.*') ? 'sidebar-link-active' : '' }}"
                        >Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.companies.index') }}"
                           class="sidebar-link {{ Route::is('admin.companies.*') ? 'sidebar-link-active' : '' }}"
                        >Bedrijven</a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-link {{ Route::is('admin.dashboard.*') ? 'sidebar-link-active' : '' }}"
                        >Gebruikers</a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-link {{ Route::is('admin.dashboard.*') ? 'sidebar-link-active' : '' }}">Behandelingen</a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-link {{ Route::is('admin.dashboard.*') ? 'sidebar-link-active' : '' }}">Indienen</a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-link {{ Route::is('admin.dashboard.*') ? 'sidebar-link-active' : '' }}">Rapporten</a>
                    </li>
                    @if(auth()->user()->is_super_admin)
                        <li>
                            <a href="{{ route('admin.styleguide.index') }}"
                               class="sidebar-link {{ Route::is('admin.styleguide.*') ? 'sidebar-link-active' : '' }}">Styleguide</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.logs.index') }}"
                               target="_blank"
                               class="sidebar-link">Logs</a>
                        </li>
                    @endif
                </ul>

                <form method="POST"
                      action="{{ route('auth.logout') }}"
                >
                    @csrf
                    @method('delete')
                    <x-button class="btn-white btn-xs" type="submit">
                        <x-icons.logout class="w-4 h-4 flex-none" />
                        Uitloggen
                    </x-button>
                </form>
            </div>
        </nav>

        <!-- Overlay voor mobiel -->
        <div id="sidebar-backdrop" class="fixed inset-0 bg-black/40 z-20 transition-opacity duration-300 opacity-0 pointer-events-none xl:hidden"></div>

        <!-- Topbar -->
        <div class="flex items-center justify-between gap-3 shadow fixed top-0 left-0 right-0 h-16 px-3 z-10 bg-white transition-transform xl:left-64">
            <a href="{{route('admin.dashboard.index')}}" target="_blank" class="font-bold text-xl">
                <img src="{{asset('logo.png')}}" alt="Logo" class="w-36 object-contain" />
            </a>
            <div class="flex-1 flex justify-end gap-2">
                <x-button class="btn-white w-11 h-11 flex-none justify-center">
                    <x-icons.bell class="w-5 h-5 flex-none" />
                    <span class="absolute block -top-2 -right-2 text-xs text-white bg-theme-danger rounded-full px-1 min-w-5 z-10">2</span>
                </x-button>

                <x-button id="sidebar-toggle" class="btn-primary w-11 h-11 flex-none justify-center xl:hidden">
                    <x-icons.bars class="w-4 h-4 flex-none fill-white" />
                </x-button>
            </div>
        </div>

        <!-- Hoofd-content -->
        <main class="flex-1 flex flex-col relative my-16 ml-0 xl:ml-64">
            <div class="container xl:max-w-5xl mx-auto">
                <x-alert :status="session('status') ?? ''" />
                @yield('content')
            </div>
        </main>

@endsection
