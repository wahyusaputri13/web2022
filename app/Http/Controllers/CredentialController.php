<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class CredentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('dashboard.user.profile', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request->hasFile(['profile_photo_path'])) {
            $validated = $request->validate([
                'profile_photo_path' => 'required|image|max:12048',
                'name' => 'required',
                'email' => 'required',
            ]);
            $gambar = User::find(auth()->user()->id);
            $gambar->updateProfilePhoto($request['profile_photo_path']);
            $data = [
                'name' => $request->name,
                'email' => $request->email,
            ];
        } else {
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
            $data = [
                'name' => $request->name,
                'email' => $request->email,
            ];
        }
        User::find(auth()->user()->id)->update($data);
        return redirect()->back()->with(['success' => 'Data has been successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
