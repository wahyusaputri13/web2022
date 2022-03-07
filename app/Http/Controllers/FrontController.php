<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;

class FrontController extends Controller
{
    public function newsdetail($id)
    {
        $data = News::find($id);
        return view('front.newsdetail', compact('data'));
    }

    public function galleryall(Request $request)
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->paginate(9);
        if ($request->ajax()) {
            return view('front.gallery', compact('gallery'));
        }
        return view('front.allgallery', compact('gallery'));
    }
}
