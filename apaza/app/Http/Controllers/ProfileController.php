<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
{
    error_log(json_encode($request->all()));

    $validatedData = $request->validate([
        'email' => ['required', 'string', 'email', 'max:255'],//El correo puede estar repetido
        'telephone' => ['required', 'string', 'size:8'], // Asegúrate de validar el teléfono de acuerdo a tus necesidades
        'name' => ['required', 'string', 'max:255'],
    ]);
    //Asigna los valores validados al usuario de forma manual
    //Esto porque el los datos tienen otro nombre
    $request->user()->fill($validatedData);
    
    //Automatica: $request->user()->fill($request->validated());

    if ($request->user()->isDirty('email')) {
        $request->user()->email_verified_at = null;
    }
    
    $request->user()->save();

    error_log(json_encode($request->user()));

    return Redirect::route('profile.edit')->with('status', 'profile-updated');
}

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
