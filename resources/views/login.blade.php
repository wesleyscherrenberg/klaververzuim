@extends('layouts.auth')

@section('content')
<div class="container">

    <div class="max-w-96 mx-auto">
        <a href="{{ url('/') }}" class="flex items-start h-full w-32 mx-auto my-6">
            <img src="{{ asset('logo.png') }}" height="44" class="block h-full py-2 object-contain" alt="Klaververzuim - Portal"/>
        </a>
        <form class="card space-y-4" method="POST" action="{{ route('admin.login.store') }}">
            <h1 class="h3">Inloggen</h1>
            <x-alert :status="session('status') ?? ''">{{ session('status') }}</x-alert>

            <x-input
                    name="email"
                    label="E-mail"
                    type="email"
                    autofocus
                    :value="old('email')"
                    error="{{ $errors->first('email') }}"
            />

            <div>
            <x-input
                    id="password"
                    name="password"
                    label="Wachtwoord"
                    type="password"
                    error="{{ $errors->first('password') }}"
            />

            <a class="link text-xs" href="#">Wachtwoord vergeten?</a>
            </div>
            <x-button class="btn-primary" type="submit">
                Inloggen
            </x-button>

            @csrf
        </form>
    </div>
</div>
@endsection
