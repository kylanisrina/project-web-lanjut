<?php
// app/Http/Middleware/RedirectIfAdminAuthenticated.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAdminAuthenticated
{
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (Auth::guard($guard)->check()) {
            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
