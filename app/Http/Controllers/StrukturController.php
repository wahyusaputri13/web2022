<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Struktur::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center text-center">
                        <a href="' . route('struktur.edit', $data->id) . ' " class="btn btn-simple btn-warning btn-icon"><i class="material-icons">dvr</i> edit</a>
                        <a href="' . route('struktur.destroy', $data->id) . ' " class="btn btn-simple btn-danger btn-icon delete-data-table"><i class="material-icons">close</i> delete</a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('back.a.pages.struktur.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.a.pages.struktur.create');
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
        $path = $request->file('photo')->store('Struktur');
        $data = [
            'name' => $name,
            'path' => $path,
            'description' => $request->description,
        ];
        struktur::create($data);
        return redirect(route('struktur.index'))->with(['success' => 'Data added successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function show(Struktur $struktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Struktur::find($id);
        return view('back.a.pages.struktur.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('photo')) {
            $validated = $request->validate([
                'photo' => 'required|image|max:12048',
                'description' => 'required',
            ]);
            $gambar = Struktur::where('id', $id)->first();
            if ($request->file('photo')->getClientOriginalName() != $gambar->name) {
                Storage::delete($gambar->path);
                $name = $request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->store('struktur');
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
        Struktur::find($id)->update($data);
        return redirect(route('struktur.index'))->with(['success' => 'Data has been successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Struktur::where('id', $id)->first();
        if (Storage::exists($gambar->path)) {
            Storage::delete($gambar->path);
        }
        $data = Struktur::destroy($id);
        return $data;
    }
}
