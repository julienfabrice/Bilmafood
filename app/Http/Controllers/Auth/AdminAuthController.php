<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Log;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin-login');
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
            // Vérifier que l'utilisateur est associé à un admin
            $admin = Admin::where('user_id', $user->id)->first();

            if ($admin) {
                // Authentifier l'admin en utilisant le user_id
                if (Auth::guard('admin')->loginUsingId($admin->user_id, $request->filled('remember'))) {
                    Log::info('Authentification réussie');
                    return redirect()->intended('/adminbilma');
                } else {
                    Log::error('Échec de l\'authentification');
                }
            } else {
                Log::error('Utilisateur non associé à un admin');
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
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/adminbilma/login');
    }

}
