<?php

namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Inbox;
use App\Models\Website;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->themes = Website::all()->first();
    }

    public function newsdetail($slug)
    {
        $data = News::where('slug', $slug)->first();
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
        $data = News::where('title', 'like', '%' . $cari . '%')->orderBy("date", "desc")->paginate();
        $news = News::latest('date')->take(5)->get();
        return view('front.' . $this->themes->themes_front . '.pages.newsbyauthor', compact('data', 'news', 'hasil'));
    }

    public function newsall(Request $request)
    {
        $news = News::orderBy('date', 'desc')->paginate(12);
        $sidepost = News::latest('date')->take(5)->get();
        return view('front.' . $this->themes->themes_front . '.pages.news', compact('news', 'sidepost'));
    }

    public function galleryall(Request $request)
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->paginate(12);
        return view('front.' . $this->themes->themes_front . '.pages.gallery', compact('gallery'));
    }

    public function page($id)
    {
        $data = DB::table('front_menus')
            ->where('menu_url', '=', $id)
            ->get();
        return view('front.' . $this->themes->themes_front . '.pages.page', compact('data'));
    }

    public function component($id)
    {
        $data = Component::all();
        return view('front.' . $this->themes->themes_front . '.component.guestbook', compact('data'));
    }

    public function setup(Request $request)
    {
        Website::create($request->except('finish'));
        return redirect(route('root'));
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

    public function inbox(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'captcha' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', 'You Have Enter The Wrong Captcha');
            return redirect()->back()->withInput();
        } else {
            Inbox::create($request->except('_token', 'captcha'));
            Alert::success('Success', 'Your Message Has Been Sent');
            return redirect(url('/'));
        }
    }

    // kampung pancasila
    public function tentangkami()
    {
        return view('front.kampungpancasila.tentang-kami');
    }

    public function latarbelakang()
    {
        return view('front.kampungpancasila.latar-belakang');
    }

    public function tujuan()
    {
        return view('front.kampungpancasila.tujuan');
    }

    public function kampungpancasila()
    {
        return view('front.kampungpancasila.kampung-pancasila');
    }

    // sql ppid setda
    public function loadsql()
    {
        set_time_limit(0);

        // insert data dari table ppid_post ke tabel news
        $variable = DB::table('ppid_posts')->get();
        foreach ($variable as $us) {
            $isi = str_replace("wp-image", "img-fluid ", $us->post_content);

            $validated =
                [
                    'photo' => 'soulofjava',
                    'path' => 'img/soulofjava.jpg',
                    'date' => $us->post_date,
                    'description' => $isi,
                    'title' => $us->post_title,
                    'upload_by' => 'Admin',
                ];
            News::create($validated);
        }

        // hapus data kolom content yang kosong
        $users = DB::table('news')
            ->where('description', '=', '')
            ->get();
        foreach ($users as $us) {
            News::destroy($us->id);
        }

        // hapus data kolom title yang kosong
        $users = DB::table('news')
            ->where('title', '=', '')
            ->get();
        foreach ($users as $us) {
            News::destroy($us->id);
        }

        // cek duplikasi dan hapus
        $users = News::all();
        $usersUnique = $users->unique('title');
        $usersDupes = $users->diff($usersUnique);
        foreach ($usersDupes as $dp) {
            News::destroy($dp->id);
        }

        // // hitung data
        // $data = News::all()->count();
        // return response()->json($data);

        return response()->json('Selesai');
    }

    public function check()
    {
        // ubah deskripsi yang ada pdf 1
        // $data = News::where('description', 'like', '%[vc_row][vc_column][v_pfbk_flip_book%')->get();
        // $width = '"100%"';
        // $height = '"750"';
        // foreach ($data as $dt) {
        //     $pdfa = str_replace("[vc_row][vc_column][v_pfbk_flip_book", "<embed", $dt->description);
        //     $slice = Str::after($pdfa, '.pdf"');
        //     $pdfb = str_replace($slice, " width=" . $width . " height=" . $height . ">", $pdfa);
        //     News::find($dt->id)->update([
        //         'description' => $pdfb
        //     ]);
        // }

        // ubah deskripsi yang ada pdf 2
        // $data = News::where('description', 'like', '%[pfbk_pdf_flipbook%')->get();
        // $width = '"100%"';
        // $height = '"750"';
        // foreach ($data as $dt) {
        //     $pdfa = str_replace("[pfbk_pdf_flipbook", "<embed", $dt->description);
        //     $slice = Str::after($pdfa, '.pdf"');
        //     $pdfb = str_replace($slice, " width=" . $width . " height=" . $height . ">", $pdfa);
        //     News::find($dt->id)->update([
        //         'description' => $pdfb
        //     ]);
        // }

        // $id = 5602;
        // $data = News::find($id);
        // $slice = Str::after($data->description, 'src="');
        // $slice2 = Str::before($slice, '"');
        // $pdfb = str_replace("][/vc_column][/vc_row]", "width=" . $width . " height=" . $height . ">", $data->description);
        // $data = News::where('description', 'like', '%.pdf%')->get();
        $data = News::all();
        // News::find($b->id)->update([
        // $data = News::where('description', 'like', '%.pdf%')->count();
        foreach ($data as $dt) {
            $slice = Str::after($dt->description, 'src="');
            $slice2 = Str::before($slice, '"');
            echo $slice2;
        }
        // return response()->json('selesai');
        // return $slice2;
    }
}
