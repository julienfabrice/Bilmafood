<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1); // La langue est le premier segment de l'URL

        $locales = Config::get('app.locales', ['fr']); // Défaut à 'fr' si 'locales' n'est pas défini
        // Log::info('Locale Middleware - Locale: ' . $locale); 
        // Log::info('Locale Middleware - Locales: ' . implode(',', $locales));

        if (in_array($locale, $locales)) {
            App::setLocale($locale);
        } else {
            $locale = Config::get('app.locale'); // Utilise la locale par défaut
            App::setLocale($locale);
        }

        Session::put('locale', $locale);

        return $next($request);
    }
}

