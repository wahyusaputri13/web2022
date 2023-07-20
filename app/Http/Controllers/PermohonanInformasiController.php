<?php

namespace App\Http\Controllers;

use App\Models\PermohonanInformasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class PermohonanInformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = PermohonanInformasi::with(['status'])->orderBy('created_at', 'DESC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center text-center">
                        <a href="' . route('permohonaninformasi.edit', $data->id) . ' " class="btn btn-simple btn-warning btn-icon"><i class="material-icons">dvr</i> Edit</a>
                        <a href="' . route('permohonaninformasi.destroy', $data->id) . ' " class="btn btn-simple btn-danger btn-icon delete-data-table"><i class="material-icons">close</i> Delete</a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->addColumn(
                    'tgl',
                    function ($data) {
                        $actionBtn = '<center>' .
                            \Carbon\Carbon::parse($data->created_at)->toFormattedDateString()
                            . '</center>';
                        return $actionBtn;
                    }
                )
                ->editColumn('status_st', function ($a) {
                    if ($a->status->code_cd == 'STATUS_ST_01') {
                        return '<span class="badge badge-pill badge-secondary">Menunggu persetujuan</span>';
                    } else if ($a->status->code_cd == 'STATUS_ST_02') {
                        return '<span class="badge badge-pill badge-success">Disetujui</span>';
                    } else if ($a->status->code_cd == 'STATUS_ST_03') {
                        return '<span class="badge badge-pill badge-danger">Ditolak</span>';
                    } else {
                        return '<span class="badge badge-pill badge-warning">Dibatalkan</span>';
                    }
                })
                ->rawColumns(['action', 'tgl', 'status_st'])
                ->make(true);
        }
        return view('back.a.pages.permohonaninformasi.index');
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
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'nomor_hp' => 'required',
            'email' => 'required',
            'tujuan' => 'required',
            'rincian' => 'required',
            'captcha' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', 'Captcha Salah!');
            return redirect()->back()->withInput();
        } else {
            PermohonanInformasi::create($request->except('_token', 'captcha'));
            Alert::success('Success', 'Permohonan Anda Terkirim');
            return redirect(url('/page/permohonan-informasi-publik'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermohonanInformasi  $permohonanInformasi
     * @return \Illuminate\Http\Response
     */
    public function show(PermohonanInformasi $permohonanInformasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermohonanInformasi  $permohonanInformasi
     * @return \Illuminate\Http\Response
     */
    public function edit(PermohonanInformasi $permohonanInformasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PermohonanInformasi  $permohonanInformasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermohonanInformasi $permohonanInformasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermohonanInformasi  $permohonanInformasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermohonanInformasi $permohonanInformasi)
    {
        //
    }
}
