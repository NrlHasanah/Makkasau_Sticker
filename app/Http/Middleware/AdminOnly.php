<?php

// app/Http/Middleware/AdminOnly.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminOnly
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user yang login adalah admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // Redirect jika bukan admin
        return redirect()->route('admin.login')->with('error', 'Akses ditolak. Silakan Login Kembali');
    }
}
