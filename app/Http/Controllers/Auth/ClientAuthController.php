<?php

// App\Http\Controllers\Auth\ClientAuthController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\Log;

class ClientAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.client-login');
    }

    public function login(Request $request)
    {
        // Valider les entrées
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Récupérer l'utilisateur par email
        $user = User::where('email', $request->input('email'))->first();

        // Vérifier que l'utilisateur existe et que le mot de passe est correct
        if ($user && Hash::check($request->input('password'), $user->password)) {
            // Vérifier que l'utilisateur est associé à un client
            $client = Client::where('user_id', $user->id)->first();

            if ($client) {
                // Authentifier le client en utilisant le user_id
                if (Auth::guard('client')->loginUsingId($client->user_id, $request->filled('remember'))) {
                    Log::info('Authentification réussie');
                    return redirect()->intended('/');
                } else {
                    Log::error('Échec de l\'authentification');
                }
            } else {
                Log::error('Utilisateur non associé à un client');
            }
        } else {
            Log::error('Utilisateur non trouvé ou mot de passe incorrect');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => __('auth.failed'),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('client')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
