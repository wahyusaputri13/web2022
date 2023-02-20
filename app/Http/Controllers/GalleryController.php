<?php

namespace App\Http\Controllers;

use App\Models\File as Files;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Gallery::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center text-center">
                        <a href="' . route('gallery.edit', $data->id) . ' " class="btn btn-simple btn-warning btn-icon"><i class="material-icons">dvr</i> edit</a>
                        <a href="' . route('gallery.destroy', $data->id) . ' " class="btn btn-simple btn-danger btn-icon delete-data-table"><i class="material-icons">close</i> delete</a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->addColumn(
                    'tgl',
                    function ($data) {
                        $actionBtn = \Carbon\Carbon::parse($data->upload_date)->toFormattedDateString();
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action', 'tgl'])
                ->make(true);
        }
        return view('back.a.pages.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.a.pages.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'upload_date' => 'required',
            'description' => 'required',
        ]);

        $id = Gallery::create($validated);

        foreach ($request->document as $df) {
            File::move(storage_path('tmp/uploads/') . $df, storage_path('app/public/gallery/') . $df);
            Files::create([
                'id_news' => $id->id,
                'path' => 'gallery/' . $df,
                'file_name' => $df
            ]);
        }

        return redirect(route('gallery.index'))->with(['success' => 'Data added successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Gallery::find($id);
        return view('back.a.pages.gallery.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'upload_date' => 'required',
            'description' => 'required',
        ]);

        Gallery::find($id)->update($validated);

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

        return redirect(route('gallery.index'))->with(['success' => 'Data has been successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Gallery::where('id', $id)->first();
        if (Storage::exists($gambar->path)) {
            Storage::delete($gambar->path);
        }
        $data = Gallery::destroy($id);
        return $data;
    }
}
