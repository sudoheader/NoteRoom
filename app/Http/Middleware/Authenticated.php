<?php

// needs modification
public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }

        if (Auth::guard($guard)->check() && Auth::user()->confirmed != 1) {
            return redirect('/unconfirmed-view');
        }
        return $next($request);
    }
