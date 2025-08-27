<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function create():Application|Factory|View|RedirectResponse
    {
        $user = Auth::user();

        if ($user && $user->is_admin) {
            return redirect()->route('admin.dashboard.index');
        }

        if ($user) {
            // hier moet return komen voor clienten voor nu op admin even houden
            return redirect()->route('admin.dashboard.index');
        }

        return view('login');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|string',
        ]);

        // Probeer in te loggen met de aangeboden gegevens
        if (!Auth::attempt($validated, true)) {
            throw ValidationException::withMessages([
                'email' => 'Het e-mailadres en/of wachtwoord zijn onjuist.'
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('admin.dashboard.index');

    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
