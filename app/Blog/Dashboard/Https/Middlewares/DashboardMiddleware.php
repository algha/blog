<?php

namespace App\Blog\Dashboard\Https\Middlewares;

use Closure;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Contracts\Auth\Guard;

class DashboardMiddleware
{
    /**
     * @var Guard
     */
    protected $auth;

    /**
     * @var
     */
    protected $routeActive;

    /**
     * AccessMiddleware constructor.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /** @noinspection PhpInconsistentReturnPointsInspection */

    /**
     * @param          $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
