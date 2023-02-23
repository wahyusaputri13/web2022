<?php

namespace App\Http\Controllers;

use App\Models\SurveilansMalaria;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SurveilansMalariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = SurveilansMalaria::with(['kelamin', 'provinsi', 'kabupaten', 'kecamatan', 'kelurahan'])->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center text-center">
                        <a href="' . route('surveilans_malaria.edit', $data->id) . ' " class="btn btn-simple btn-warning btn-icon"><i class="material-icons">dvr</i> Edit</a>
                        <a href="' . route('surveilans_malaria.destroy', $data->id) . ' " class="btn btn-simple btn-danger btn-icon delete-data-table"><i class="material-icons">close</i> Delete</a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->addColumn(
                    'lahir',
                    function ($data) {
                        $actionBtn = '<center>' .
                            \Carbon\Carbon::parse($data->tanggal_lahir)->toFormattedDateString()
                            . '</center>';
                        return $actionBtn;
                    }
                )
                ->addColumn(
                    'kembali',
                    function ($data) {
                        $actionBtn = '<center>' .
                            \Carbon\Carbon::parse($data->tgl_kembali)->toFormattedDateString()
                            . '</center>';
                        return $actionBtn;
                    }
                )
                ->addColumn(
                    'last_city',
                    function ($data) {
                        $actionBtn = '<center>' .
                            $data->kelurahan->region_nm . ', ' . $data->kecamatan->region_nm . ', ' . $data->kabupaten->region_nm . ', ' . $data->provinsi->region_nm
                            . '</center>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action', 'lahir', 'kembali', 'last_city'])
                ->make(true);
        }
        return view('back.a.pages.surveilans_malaria.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.a.pages.surveilans_malaria.create');
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
            'nik' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'region_prop' => 'required',
            'region_kab' => 'required',
            'region_kec' => 'required',
            'region_kel' => 'required',
            'tgl_kembali' => 'required',
        ]);

        SurveilansMalaria::create($validated + ['insert_by' => auth()->user()->id]);

        return redirect(route('surveilans_malaria.index'))->with(['success' => 'Data added successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SurveilansMalaria  $surveilansMalaria
     * @return \Illuminate\Http\Response
     */
    public function show(SurveilansMalaria $surveilansMalaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SurveilansMalaria  $surveilansMalaria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = SurveilansMalaria::find($id);
        $kab = get_kab($data->region_prop);
        $kec = get_kec($data->region_kab);
        $kel = get_kec($data->region_kec);
        return view('back.a.pages.surveilans_malaria.edit', compact('data', 'kab', 'kec', 'kel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SurveilansMalaria  $surveilansMalaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'region_prop' => 'required',
            'region_kab' => 'required',
            'region_kec' => 'required',
            'region_kel' => 'required',
            'tgl_kembali' => 'required',
        ]);

        SurveilansMalaria::find($id)->update($validated);
        return redirect(route('surveilans_malaria.index'))->with(['success' => 'Data has been successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SurveilansMalaria  $surveilansMalaria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SurveilansMalaria::destroy($id);
        return $data;
    }
}
