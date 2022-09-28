<?php

namespace App\Http\Controllers;

use App\Models\Buaper;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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
            $data = Buaper::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center text-center">
                        <a href="' . route('buaper.edit', $data->id) . ' " class="btn btn-simple btn-warning btn-icon"><i class="material-icons">dvr</i> edit</a>
                        <a href="' . route('buaper.destroy', $data->id) . ' " class="btn btn-simple btn-danger btn-icon delete-data-table"><i class="material-icons">close</i> delete</a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('back.a.pages.buaper.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.a.pages.buaper.create');
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
            'photo' => 'required|image|max:12048',
            'description' => 'required',
        ]);
        $name = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->store('buaper');
        $data = [
            'name' => $name,
            'path' => $path,
            'description' => $request->description,
        ];
        Buaper::create($data);
        return redirect(route('buaper.index'))->with(['success' => 'Data added successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buaper  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Buaper $buaper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buaper  $buaper
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Buaper::find($id);
        return view('back.a.pages.buaper.edit', compact('data'));
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
            ]);
            $gambar = Buaper::where('id', $id)->first();
            if ($request->file('photo')->getClientOriginalName() != $gambar->name) {
                Storage::delete($gambar->path);
                $name = $request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->store('buaper');
                $data = [
                    'name' => $name,
                    'path' => $path,
                    'description' => $request->description,
                ];
            }
        } else {
            $validated = $request->validate([
                'description' => 'required',
            ]);
            $data = [
                'description' => $request->description,
            ];
        }
        Buaper::find($id)->update($data);
        return redirect(route('buaper.index'))->with(['success' => 'Data has been successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buaper  $buaper
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Buaper::where('id', $id)->first();
        if (Storage::exists($gambar->path)) {
            Storage::delete($gambar->path);
        }
        $data = Buaper::destroy($id);
        return $data;
    }
}
