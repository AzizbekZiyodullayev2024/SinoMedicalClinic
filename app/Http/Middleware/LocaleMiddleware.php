<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $locale = Session::get('locale', 'uz'); // Standart til o‘zbek
        App::setLocale($locale);

        return $next($request);
    }
}
