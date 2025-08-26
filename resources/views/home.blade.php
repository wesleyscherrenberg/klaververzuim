@extends('layouts.app')

@php
    $crumbs = [
        [ 'text' => 'Prijzen']
    ];

    $sizes = [
        '10px',
        '12px',
        '14px',
        '16px',
        '18px',
    ]
@endphp

@section('content')

    <x-breadcrumbs :items="$crumbs" />
    <div class="container">


        <h1 class="mt-36 font-light [&>b]:font-bold"><b>PedicureZoeken</b> is de plek waar jij je Pedicure bij jou in de buurt kunt vinden</h1>
        <p>Profiteer van vele kortingen en volg verschillende cursussen, maak gebruik van de webshop voor de aanschaf van je ledenserviceartikelen of discussieer direct met vakgenoten.</p>
        <p><strong>Profiteer van vele kortingen en volg verschillende cursussen,</strong> maak gebruik van de webshop voor de aanschaf van je ledenserviceartikelen <strong>of discussieer direct met vakgenoten.</strong></p>

        <div class="flex gap-1">
            <x-button class="btn-primary">Pedicure aanmelden</x-button>
            <x-button class="btn-secondary">Pedicure aanmelden</x-button>
            <x-button class="btn-danger">Pedicure aanmelden</x-button>
            <x-button class="btn-white">Pedicure aanmelden</x-button>
        </div>

        <div class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <x-input
                        name="username"
                        label="Gebruikersnaam"
                        id="username"
                        placeholder="Vul je gebruikersnaam in"
                        autofocus
                />
                <x-input
                        name="username"
                        label="E-mailadres"
                        id="email"
                        placeholder="Vul je email in"
                        autofocus
                />
            </div>

            <x-select id="font_size" name="font_size" label="Lettergrootte">
                @foreach($sizes as $size)
                    <option value="{{ $size }}" @selected(old('font_size') == $size)>
                        {{ $size }}
                    </option>
                @endforeach
            </x-select>

            <x-textarea></x-textarea>

            <x-button class="btn-primary">Pedicure aanmelden</x-button>

            <x-checkbox id="checkbox" name="checkbox" label="Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden " />
            <x-radio id="radio1" name="test" label="Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden" />
            <x-radio id="radio2" name="test" label="Ik ga akkoord met de voorwaarden" />
            <x-radio id="radio3" name="test" label="Ik ga akkoord met de voorwaarden" />
        </div>
    </div>
@endsection
