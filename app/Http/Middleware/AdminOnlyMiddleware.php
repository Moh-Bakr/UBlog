<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminOnlyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()?->username!=='admin'){
                abort(403);
        }
        return $next($request);
    }


}
