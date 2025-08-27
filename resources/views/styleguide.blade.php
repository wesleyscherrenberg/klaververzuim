@extends('layouts.admin')

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

        <h1>H1 tekst</h1>
        <h2>H2 tekst</h2>
        <h3>H3 tekst</h3>
        <h4>H4 tekst</h4>
        <h5>H5 tekst</h5>
        <h6>H6 tekst</h6>
        <p>Profiteer van vele kortingen en volg verschillende cursussen, maak gebruik van de webshop voor de aanschaf van je ledenserviceartikelen of discussieer direct met vakgenoten.</p>
        <p><strong>Profiteer van vele kortingen en volg verschillende cursussen,</strong> maak gebruik van de webshop voor de aanschaf van je ledenserviceartikelen <strong>of discussieer direct met vakgenoten.</strong></p>

        <div class="flex gap-1">
            <x-button class="btn-primary">Primary</x-button>
            <x-button class="btn-secondary">Secondary</x-button>
            <x-button class="btn-success">Success</x-button>
            <x-button class="btn-danger">Danger</x-button>
            <x-button class="btn-white">White</x-button>
        </div>


        <form class="card space-y-4" method="POST" action="#">
            <h1 class="h3">Inloggen</h1>
            <x-alert :status="session('status') ?? ''">Hallo</x-alert>


            <x-input
                    name="email"
                    label="E-mail"
                    type="email"
                    autofocus
                    :value="old('email')"
                    error="{{ $errors->first('email') }}"
            />

            <x-input
                    id="password"
                    name="password"
                    label="Wachtwoord"
                    type="password"
                    error="{{ $errors->first('password') }}"
            />

            <x-button class="btn-primary" type="submit">
                Inloggen
            </x-button>

            @csrf
        </form>

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

            <x-button class="btn-success">Opslaan</x-button>

            <x-checkbox id="checkbox" name="checkbox" label="Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden " />
            <x-radio id="radio1" name="test" label="Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden Ik ga akkoord met de voorwaarden" />
            <x-radio id="radio2" name="test" label="Ik ga akkoord met de voorwaarden" />
            <x-radio id="radio3" name="test" label="Ik ga akkoord met de voorwaarden" />
        </div>
@endsection
