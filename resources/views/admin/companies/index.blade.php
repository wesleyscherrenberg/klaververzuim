@extends('layouts.admin')

@php
    $crumbs = [
        ['text' => 'Bedrijven']
    ];
@endphp

@section('content')

    <x-breadcrumbs :items="$crumbs" />

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold">Bedrijven</h1>
        <x-link href="{{ route('admin.companies.create') }}" class="btn-primary">
            Nieuw bedrijf
        </x-link>
    </div>

    <form method="GET" class="flex flex-col md:flex-row gap-4 mb-4">
        <div class="flex w-full md:max-w-md">
            <x-input
                    type="search"
                    name="search"
                    class="form-input w-full"
                    value="{{ request('search') }}"
                    placeholder="Zoek op bedrijfsnaam, e-mail of debiteuren nr."
            />
            <x-button type="submit" class="btn-primary rounded-l-none">Zoek</x-button>
        </div>

        <div class="ml-auto w-52">
            <x-select id="sort" name="sort" onchange="this.form.submit()">
                <option value="" @if(request('sort')=='') selected @endif>Sorteer op</option>
                <option value="name_asc" @if(request('sort')=='name_asc') selected @endif>Naam A-Z</option>
                <option value="name_desc" @if(request('sort')=='name_desc') selected @endif>Naam Z-A</option>
                <option value="created_desc" @if(request('sort')=='created_desc') selected @endif>Nieuwste eerst</option>
                <option value="created_asc" @if(request('sort')=='created_asc') selected @endif>Oudste eerst</option>
            </x-select>
        </div>
    </form>

    <div class="grid gap-6 grid-cols-1">
        @forelse($companies as $company)
            <div class="card isolate relative flex flex-col md:flex-row md:items-end md:justify-between">
                <div class="flex-1">
                    <div class="mb-1 text-lg font-bold">
                        {{ $company->name }}
                    </div>
                    <div class="flex gap-2 mb-2">
                        <div class="bg-theme-primary text-white text-xs px-2 py-1 rounded">
                            {{ $company->users_count }} gebruiker{{ $company->users_count === 1 ? '' : 's' }}
                        </div>
                        <div class="bg-theme-secondary text-white text-xs px-2 py-1 rounded">
                            {{ $company->aanvragen_count ?? '--' }} aanvragen
                        </div>
                    </div>

                    <div class="text-sm text-theme-gray-lighter mb-2 flex items-center gap-0.5">
                        <x-icons.location-dot class="w-5 h-5 fill-theme-gray" />
                        {{ $company->street }} {{ $company->street_number }},
                        {{ $company->postal_code }} {{ $company->city }}
                    </div>
                    @if($company->phone)
                        <div class="text-sm"><span class="font-semibold">Telefoon:</span> {{ $company->phone }}</div>
                    @endif
                    @if($company->email)
                        <div class="text-sm"><span class="font-semibold">E-mail:</span>
                            <a href="mailto:{{ $company->email }}" class="underline text-theme-secondary">{{ $company->email }}</a>
                        </div>
                    @endif
                    @if($company->debtor_number)
                        <div class="text-xs text-theme-gray-lighter mt-2">Debiteuren nr: {{ $company->debtor_number }}</div>
                    @endif
                    <div class="text-xs text-theme-gray-lighter">
                        Aangemaakt op: {{ $company->created_at?->format('d-m-Y') ?? '-' }}
                    </div>
                </div>
                <div class="flex justify-end mt-3 md:mt-0 md:ml-6">
                    <x-link class="btn-xs">Bekijken <x-icons.arrow-right class="w-3 h-3 flex-none" /></x-link>
                </div>
            </div>
        @empty
            <x-no-results title="Geen bedrijven gevonden" message="Pas uw zoekcriteria aan of voeg een nieuw bedrijf toe." />
        @endforelse
    </div>



    <div class="mt-8 ml-auto flex justify-end">
        {{ $companies->links() }}
    </div>
@endsection
