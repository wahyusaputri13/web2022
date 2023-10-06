<?php

namespace App\Http\Middleware;

use App\Models\Counter;
use Closure;
use Illuminate\Http\Request;
use App\Models\Website;
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
        $news = News::all()->count();
        $gallery = Gallery::all()->count();
        $counter = Counter::all()->count();
        // Sharing is caring
        view()->share('data_website', $data);
        view()->share('news_all', $news);
        view()->share('gallery_all', $gallery);
        view()->share('counter_web', $counter);
        return $next($request);
    }
}
