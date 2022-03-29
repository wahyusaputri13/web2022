<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\Menu;
use App\Models\Gallery;
use App\Models\News;

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
        $news = News::all()->count();
        $gallery = Gallery::all()->count();
        // Sharing is caring
        view()->share('data_website', $data);
        view()->share('menu_website', $menu);
        view()->share('news_all', $news);
        view()->share('gallery_all', $gallery);
        return $next($request);
    }
}
