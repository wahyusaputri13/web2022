<?php

namespace App\Http\Controllers;

use App\Models\GuestBook;
use App\Models\Website;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class GuestBookController extends Controller
{
    public function __construct()
    {
        $this->themes = Website::all()->first();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = GuestBook::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        return view('front.' . $this->themes->themes_front . '.component.guestbook');
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
     * @param  \App\Models\GuestBook  $guestBook
     * @return \Illuminate\Http\Response
     */
    public function show(GuestBook $guestBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuestBook  $guestBook
     * @return \Illuminate\Http\Response
     */
    public function edit(GuestBook $guestBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuestBook  $guestBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuestBook $guestBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuestBook  $guestBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuestBook $guestBook)
    {
        //
    }
}
