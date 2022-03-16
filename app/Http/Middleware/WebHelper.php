<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\Menu;
use App\Models\Submenu;

class WebHelper
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //its just a dummy data object.
        $data = Website::first();
        $menu = Menu::with('submenu')->get();
        // Sharing is caring
        view()->share('data_website', $data);
        view()->share('menu_website', $menu);
        return $next($request);
    }
}
