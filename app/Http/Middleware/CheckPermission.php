<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPermission
{
    public function handle(Request $request, Closure $next, $permission)
    {
        // Check if the user has the required permission
        if (!$request->user() || !$request->user()->hasPermission($permission)) {
            // Optionally, you can return a 403 response or redirect to a "no permission" page
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}

