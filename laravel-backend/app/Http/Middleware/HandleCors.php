<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\HandleCors as Middleware;

class HandleCors extends Middleware
{
    /**
     * The allowed origins.
     *
     * @var array
     */
    protected $allowedOrigins = [];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        $this->allowedOrigins = explode(',', env('CORS_ALLOWED_ORIGINS', '*'));
        
        return parent::handle($request, $next);
    }
}
