<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $lang = $request->header('lang') && in_array($request->header('lang'), config('app.locales'))
            ? $request->header('lang') : config('app.locale');

        app()->setlocale($lang);

        return $next($request);
    }
}
