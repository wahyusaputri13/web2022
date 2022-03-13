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
        return view('front.pages.newsdetail', compact('data', 'news'));
    }

    public function newsByAuthor($id)
    {
        $data = News::where('upload_by', '=', $id)->orderBy("date", "desc")->paginate(5);
        $news = News::orderBy('date', 'desc')->paginate(5);
        return view('front.pages.newsbyauthor', compact('data', 'news'));
    }

    public function newsall(Request $request)
    {
        $news = News::orderBy('date', 'desc')->paginate(9);
        if ($request->ajax()) {
            return view('front.pages.news', compact('news'));
        }
        return view('front.pages.news', compact('news'));
    }

    public function galleryall(Request $request)
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->paginate(9);
        if ($request->ajax()) {
            return view('front.pages.gallery', compact('gallery'));
        }
        return view('front.pages.gallery', compact('gallery'));
    }

    public function setup(Request $request)
    {
        Website::create($request->except('finish'));
        return redirect(route('root'));
    }
}
