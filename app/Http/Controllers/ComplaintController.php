<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\LogComplaint;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Complaint::orderBy('date', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center text-center">
                        <a href="' . route('complaint.show', $data->id) . ' " class="btn btn-simple btn-success btn-icon"><i class="material-icons">info</i> Timeline</a>
                        <a href="' . route('complaint.edit', $data->id) . ' " class="btn btn-simple btn-warning btn-icon"><i class="material-icons">dvr</i> Show</a>
                        <a href="' . route('complaint.destroy', $data->id) . ' " class="btn btn-simple btn-danger btn-icon delete-data-table"><i class="material-icons">close</i> Delete</a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->addColumn(
                    'tgl',
                    function ($data) {
                        $actionBtn = '<center>' .
                            \Carbon\Carbon::parse($data->date)->toFormattedDateString()
                            . '</center>';
                        return $actionBtn;
                    }
                )
                ->addColumn(
                    'statuz',
                    function ($data) {
                        if ($data->status == 'open') {
                            $actionBtn = '<span class="tag label label-success">Open</span>';
                        } else if($data->status == 'Being Processed') {
                            $actionBtn = '<span class="tag label label-info">Processed</span>';
                        }else{
                            $actionBtn = '<span class="tag label label-danger">Close</span>';
                        }
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action', 'tgl', 'statuz'])
                ->make(true);
        }
        return view('back.a.pages.complaint.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.a.pages.complaint.create');
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
            'date' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);
         $path = $request->file('photo')->store('public_complaints');
        $id = Complaint::create(request()->except('_method', '_token', 'photo') + [
            'user_id' => auth()->user()->id,
            'attachment' => $path
            ])->id;
        LogComplaint::create([
            'complaint_id' => $id,
            'message' => 'Report Created'
        ]);
        return redirect(route('complaint.index'))->with(['success' => 'Data added successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = LogComplaint::where('complaint_id', $id)->with('report.report2')->get();
        return view('back.a.pages.complaint.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Complaint::find($id);
        return view('back.a.pages.complaint.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
   
    public function updatestatus(Request $request)
    {
        Complaint::where('id', $request->zzz)->update(['status' => 'Being Processed']);
        LogComplaint::create([
            'complaint_id' => $request->zzz,
            'message' => 'Being Processed'
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Complaint::find($id);
        return $data->delete();
    }
}
