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
      if ($this->auth->guest()){
           if ($request->ajax()){
               $data["message"] = 'You are not logged in.';
               $data["code"] = 0;
               return response()->json($data, 200);
           }else{
               return redirect()->route('dashboard.login'); // <--- note this
           }
       }
       return $next($request);
    }
}
