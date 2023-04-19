<?php

namespace App\Http\Controllers;

use App\Models\DownloadArea;
use App\Models\DownloadAreaFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadAreaFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
            'path' => $path . $name
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DownloadArea::with('files')->where('id', $id)->first();
        foreach ($data->files as $d) {
            $fileList[] = [
                'name'          => $d->file_name,
                'size'          => Storage::size(($d->file_path)),
                'path'          => config('app.url') . '/storage/' . $d->file_path
            ];
        }
        return json_encode($fileList ?? []);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loc = storage_path('tmp/uploads/') . $id;

        if (file_exists($loc)) {
            unlink(storage_path('tmp/uploads/' . $id));
            return response()->json([
                'lokasi'          => $loc,
            ]);
        } else {
            $data = DownloadAreaFile::where('file_name', $id)->first();
            $data->delete();
            unlink(storage_path('app/public/download-area/') . $id);
            return response()->json([
                'lokasi' => 'File terhapus'
            ]);
        }
    }
}
