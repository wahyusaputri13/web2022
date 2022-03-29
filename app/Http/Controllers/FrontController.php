<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Website;
use CyrildeWit\EloquentViewable\Views;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->themes = Website::all()->first();
    }

    public function newsdetail($id)
    {
        $data = News::find($id);
        views($data)->cooldown(5)->record();
        $news = News::orderBy('date', 'desc')->paginate(5);
        return view('front.' . $this->themes->themes_front . '.pages.newsdetail', compact('data', 'news'));
    }

    public function newsByAuthor($id)
    {
        $hasil = 'All post by : ' . $id;
        $data = News::where('upload_by', '=', $id)->orderBy("date", "desc")->paginate(5);
        $news = News::latest('date')->take(5)->get();
        return view('front.' . $this->themes->themes_front . '.pages.newsbyauthor', compact('data', 'news', 'hasil'));
    }

    public function newsBySearch(Request $request)
    {
        $cari = $request->kolomcari;
        $hasil = 'Search result : ' . $cari;
        $data = News::where('title', 'like', '%' . $cari . '%')->orderBy("date", "desc")->paginate(5);
        $news = News::latest('date')->take(5)->get();
        return view('front.' . $this->themes->themes_front . '.pages.newsbyauthor', compact('data', 'news', 'hasil'));
    }

    public function newsall(Request $request)
    {
        $news = News::orderBy('date', 'desc')->paginate(9);
        if ($request->ajax()) {
            return view('front.' . $this->themes->themes_front . '.pages.news', compact('news'));
        }
        return view('front.' . $this->themes->themes_front . '.pages.news', compact('news'));
    }

    public function galleryall(Request $request)
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->paginate(9);
        if ($request->ajax()) {
            return view('front.' . $this->themes->themes_front . '.pages.gallery', compact('gallery'));
        }
        return view('front.' . $this->themes->themes_front . '.pages.gallery', compact('gallery'));
    }

    public function setup(Request $request)
    {
        Website::create($request->except('finish'));
        return redirect(route('root'));
    }

    public function tentangkami()
    {
        return view('front.tentang-kami');
    }

    public function latarbelakang()
    {
        return view('front.latar-belakang');
    }

    public function tujuan()
    {
        return view('front.tujuan');
    }

    public function kampungpancasila()
    {
        return view('front.kampung-pancasila');
    }
}
