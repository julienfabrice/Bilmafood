<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function registerClient(Request $request)
    {
        $request->validate([
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telephone' => 'nullable|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
            'type' => 'client',
        ]);

        Client::create(['user_id' => $user->id]);

        return redirect()->route('client.login');
    }
}
