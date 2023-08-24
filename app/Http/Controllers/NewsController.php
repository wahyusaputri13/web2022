<?php

namespace App\Http\Controllers;

use App\Models\ComCodes;
use App\Models\News;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
use App\Models\File as Files;
use File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = News::orderBy('date', 'DESC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center text-center">
                        <a href="' . route('news.edit', $data->id) . ' " class="btn btn-simple btn-warning btn-icon"><i class="material-icons">dvr</i> Ubah</a>
                        <a href="' . route('news.destroy', $data->id) . ' " class="btn btn-simple btn-danger btn-icon delete-data-table"><i class="material-icons">close</i> Hapus</a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->addColumn(
                    'tgl',
                    function ($data) {
                        $actionBtn = '<center>' .
                            \Carbon\Carbon::parse($data->date)->toFormattedDateString()
                            . '</center>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action', 'tgl'])
                ->make(true);
        }
        return view('back.a.pages.news.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $highlight = ComCodes::where('code_group', 'highlight_news')->pluck('code_nm');
        $categori = ComCodes::where('code_group', 'BAGIAN_NEWS')->orderBy('code_nm', 'ASC')->pluck('code_nm', 'code_cd');
        return view('back.a.pages.news.create', compact('highlight', 'categori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            'highlight' => 'required',
=======
            // 'highlight' => 'required',
>>>>>>> 121ae8f (tampilkan error ke news)
            // 'kategori' => 'required',
>>>>>>> d99ddb5 (hide kategori)
        ]);

<<<<<<< HEAD
        if ($request->dip_tahun) {
            $id = News::create($request->except(['_token', 'document', 'tag', 'kategori']) + ['dip' => true, 'upload_by' => auth()->user()->id]);
        } else {
            $id = News::create($request->except(['_token', 'document', 'tag']) + ['upload_by' => auth()->user()->id]);
        }

        // tagging postingan
        $id->tag($request->tag);
=======
        $id = News::create($validated + ['kategori' => $request->jip ?? null, 'upload_by' => auth()->user()->id]);
>>>>>>> 3c71dcd (berita tambah kategori ppid)
=======
        ]);

        if ($request->dip_tahun) {
            $id = News::create($request->except(['_token']) + ['dip' => true, 'upload_by' => auth()->user()->id]);
        } else {
            $id = News::create($val + ['upload_by' => auth()->user()->id]);
        }
>>>>>>> ac31215 (perbaiki migrasi)

        if ($request->document) {
            foreach ($request->document as $df) {
                $path = storage_path('app/public/gallery');

                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }

                File::move(storage_path('tmp/uploads/') . $df, storage_path('app/public/gallery/') . $df);
                Files::create([
                    'id_news' => $id->id,
                    'path' => 'gallery/' . $df,
                    'file_name' => $df
                ]);
            }
        }
        return redirect(route('news.index'))->with(['success' => 'Data added successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = News::find($id);
        $terpilih = [];

        $highlight = ComCodes::where('code_group', 'highlight_news')->pluck('code_nm');
        $categori = ComCodes::where('code_group', 'BAGIAN_NEWS')->orderBy('code_nm', 'ASC')->pluck('code_nm', 'code_cd');

        // untuk list yang terpilih
        foreach ($data->tagged as $key => $value) {
            array_push($terpilih, strtoupper($value->tag_name));
        }

        return view('back.a.pages.news.edit', compact('data', 'highlight', 'categori', 'terpilih'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
<<<<<<< HEAD
            'date' => 'required',
            'description' => 'required',
=======
            'description' => 'required',
            'date' => 'required',
<<<<<<< HEAD
            // 'highlight' => 'required',
            // 'kategori' => 'required',
>>>>>>> 121ae8f (tampilkan error ke news)
        ]);

<<<<<<< HEAD
<<<<<<< HEAD
        $data = News::find($id);
        $data->slug = null;

        if ($request->dip_tahun) {
            $data->update($request->except(['_token', 'document', 'tag', 'kategori']) + ['dip' => true, 'upload_by' => auth()->user()->id]);
        } else {
            $data->update($request->except(['_token', 'document', 'tag']) + ['upload_by' => auth()->user()->id]);
        }

        // tag ulang postingan
        $data->retag($request->tag);
=======
        News::find($id)->update($validated + ['kategori' => $request->kategori ?? null, 'upload_by' => auth()->user()->name]);
>>>>>>> 3c71dcd (berita tambah kategori ppid)
=======
        News::find($id)->update($validated + ['kategori' => $request->kategori ?? null, 'upload_by' => auth()->user()->id]);
>>>>>>> e144481 (href jdih)
=======
        ]);

        if ($request->dip_tahun) {
            News::find($id)->update($request->except(['_token']) + ['dip' => true, 'upload_by' => auth()->user()->id]);
        } else {
            News::find($id)->update($validated + ['kategori' => $request->kategori ?? null, 'upload_by' => auth()->user()->id]);
        }
>>>>>>> be6c8e1 (perbaikan update news)

        if ($request->document) {
            foreach ($request->document as $df) {
                File::move(storage_path('tmp/uploads/') . $df, storage_path('app/public/gallery/') . $df);
                Files::create([
                    'id_news' => $id,
                    'path' => 'gallery/' . $df,
                    'file_name' => $df
                ]);
            }
        }

        return redirect(route('news.index'))->with(['success' => 'Data has been successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = News::with('gambar')->where('id', $id)->get();
        foreach ($gambar as $key) {
            foreach ($key->gambar as $value) {
                if (Storage::exists($value->path)) {
                    Storage::delete($value->path);
                }
            }
        }

        $data = News::find($id);
        // delete related   
        $data->gambar()->delete();

        return $data->delete();
    }

    // pindah dari wonosobokab
    public function insert()
    {
        set_time_limit(0);
        $tables = DB::select('SHOW TABLES');
        $data = DB::table('postingan')->where('domain', 'arpusda.wonosobokab.go.id')->get();
        foreach ($data as $dt) {
            $file = DB::table('attachment')
                ->where('id_tabel', $dt->id_posting)
                ->get();
            foreach ($file as $f) {
                $fi = [
                    'id_news' => $f->id_tabel,
                    'file_name' => $f->file_name,
                    'path' => 'gallery/' . $f->file_name,
                ];
                Files::insert($fi);
            }
            $pk = [
                'title' => $dt->judul_posting,
                'date' => $dt->created_time,
                'upload_by' => auth()->user()->name,
                'description' => $dt->isi_posting,
                'attachment' => $dt->id_posting,
                'slug' => SlugService::createSlug(News::class, 'slug', $dt->judul_posting),
            ];
            News::insert($pk);
        }
        return 'selesai';
    }
}
