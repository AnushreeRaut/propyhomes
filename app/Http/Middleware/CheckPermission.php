<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPermission
{
    public function handle(Request $request, Closure $next, $permission)
    {
        $user = Auth::user();

        // Check if the user has the required permission
        if ($user->role->permissions->contains('permission_name', $permission)) {
            return $next($request);
        }

        return redirect()->route('index')->with('error', 'You do not have permission to access this page.');
    }
}

