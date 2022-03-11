<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Website::first();
        return view('dashboard.website.index', compact('data'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = 1)
    {
        $gambar = Website::find($id);
        $name = $gambar->image_hero_name;
        $path = $gambar->image_hero;
        if ($request->hasFile('image_hero')) {
            if ($request->file('image_hero')->getClientOriginalName() != $gambar->image_hero_name) {
                Storage::delete($gambar->image_hero);
                $name = $request->file('image_hero')->getClientOriginalName();
                $path = $request->file('image_hero')->store('website');
            }
        }
        Website::find($id)->update($request->except(['_token', 'image_hero']) + [
            'image_hero_name' => $name,
            'image_hero' => $path
        ]);
        return redirect()->back()->with(['success' => 'Data has been successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        //
    }
}
