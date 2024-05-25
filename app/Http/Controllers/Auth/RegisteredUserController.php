<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'suffix' => ['string', 'max:255'],
            'sex' => ['required', 'string', 'max:10'],
            'civil_status' => ['required', 'string', 'max:25'],
            'birthdate' => ['required', 'date', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'municipality' => ['required', 'string', 'max:255'],
            'baranggay' => ['required', 'string', 'max:255'],
            'house_no_street_subdivision' => ['required', 'string', 'max:255'],
            'id_issuance_date' => ['required', 'date', 'max:255'],
            'id_valid_until' => ['required', 'date', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'suffix' => $request->suffix,
            'sex' => $request->sex,
            'civil_status' => $request->civil_status,
            'birthdate' => $request->birthdate,
            'province' => $request->province,
            'municipality' => $request->municipality,
            'baranggay' => $request->baranggay,
            'house_no_street_subdivision' => $request->house_no_street_subdivision,
            'id_issuance_date' => $request->id_issuance_date,
            'id_valid_until' => $request->id_valid_until,
        ]);

        event(new Registered($user));

        if (Auth::check() && Auth::user()->is_admin) {
            return back();
            // return redirect()->intended(route('admin/dashboard', absolute: false));
        }

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
