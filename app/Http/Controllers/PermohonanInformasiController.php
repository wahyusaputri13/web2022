<?php

namespace App\Http\Controllers;

use App\Models\PermohonanInformasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PermohonanInformasiController extends Controller
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
