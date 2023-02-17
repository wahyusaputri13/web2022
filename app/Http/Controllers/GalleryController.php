<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

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
        $data = [
            'description' => $request->description,
            'upload_date' => $request->upload_date,
        ];
        $id = Gallery::create($data);
        foreach ($request->document as $df) {
            $from = storage_path('tmp/uploads/' . $df);
            $to = public_path('gallery/' . $df);
            dd($to);
            Storage::move($from, $to);
            File::create([
                'id_news' => $id->id,
                'file_name' => 'gallery/' . $df
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
        if ($request->hasFile('photo')) {
            $validated = $request->validate([
                'photo' => 'required|image|max:12048',
                'description' => 'required',
                'upload_date' => 'required',
            ]);
            $gambar = Gallery::where('id', $id)->first();
            if ($request->file('photo')->getClientOriginalName() != $gambar->name) {
                Storage::delete($gambar->path);
                $name = $request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->store('gallery');
                $data = [
                    'name' => $name,
                    'path' => $path,
                    'description' => $request->description,
                    'upload_date' => $request->upload_date,
                ];
            }
        } else {
            $validated = $request->validate([
                'description' => 'required',
                'upload_date' => 'required',
            ]);
            $data = [
                'description' => $request->description,
                'upload_date' => $request->upload_date,
            ];
        }
        Gallery::find($id)->update($data);
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
