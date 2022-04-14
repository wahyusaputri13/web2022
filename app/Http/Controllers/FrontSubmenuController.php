<?php

namespace App\Http\Controllers;

use App\Models\FrontMenu;
use App\Models\FrontSubmenu;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FrontSubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = FrontSubmenu::with('menu');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center text-center">
                        <a href="' . route('frontsubmenu.edit', $data->id) . ' " class="btn btn-simple btn-warning btn-icon"><i class="material-icons">dvr</i> edit</a>
                        <a href="' . route('frontsubmenu.destroy', $data->id) . ' " class="btn btn-simple btn-danger btn-icon delete-data-table"><i class="material-icons">close</i> delete</a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('back.a.pages.frontsubmenu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = FrontMenu::orderBy('menu', 'asc')->pluck('menu', 'id');
        return view('back.a.pages.frontsubmenu.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'menu_id' => 'required',
                'name' => 'required'
            ],
        );
        FrontSubmenu::create($request->except('_token'));
        return redirect(route('frontsubmenu.index'))->with(['success' => 'Data added successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FrontSubmenu  $frontSubmenu
     * @return \Illuminate\Http\Response
     */
    public function show(FrontSubmenu $frontSubmenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FrontSubmenu  $frontSubmenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = FrontMenu::orderBy('menu', 'asc')->pluck('menu', 'id');
        $data = FrontSubmenu::find($id);
        return view('back.a.pages.frontsubmenu.edit', compact('data', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FrontSubmenu  $frontSubmenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        FrontSubmenu::find($id)->update(
            $request->except(['_token']),
        );
        return redirect(route('frontsubmenu.index'))->with(['success' => 'Data has been successfully changed!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FrontSubmenu  $frontSubmenu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FrontSubmenu::destroy($id);
        return $data;
    }
}
