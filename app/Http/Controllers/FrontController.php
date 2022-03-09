<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Website;

class FrontController extends Controller
{
    public function newsdetail($id)
    {
        $data = News::find($id);
        $news = News::orderBy('date', 'desc')->paginate(5);
        return view('front.newsdetail', compact('data', 'news'));
    }

    public function newsall(Request $request)
    {
        $news = News::orderBy('date', 'desc')->paginate(9);
        if ($request->ajax()) {
            return view('front.news', compact('news'));
        }
        return view('front.newsall', compact('news'));
    }

    public function galleryall(Request $request)
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->paginate(9);
        if ($request->ajax()) {
            return view('front.gallery', compact('gallery'));
        }
        return view('front.allgallery', compact('gallery'));
    }

    public function setup(Request $request)
    {
        // dd($request->all());
        Website::create($request->except('finish'));
        return redirect(route('root'));
    }
}
