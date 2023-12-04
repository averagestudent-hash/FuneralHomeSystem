<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Yajra\Datatables\Datatables;
use DB;
use DateTime;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $announce = Announcement::all();

        if ($request->ajax()) {
            $data = $announce;
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', 'admin.announcements.action')
                    // ->addColumn('checkbox', function($row){
                    //     return '<input type="checkbox" name="sl_checkbox" data-id="'.$row['id'].'"><label></label>';
                    // })
                    // ->rawColumns(['checkbox','action'])
                    ->make();
        }

        return view('admin.announcements.index', compact('announce'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            // dd("HEY");
            $announce = new Announcement;
            $announce->description = $request->description;

            if($request->hasFile('img_path'))
            {
                $img_path = $request->file('img_path')->getClientOriginalName();
                $request->file('img_path')->storeAs('public/images', $img_path);
                $announce->img = 'storage/images/'.$img_path;
            }
            $announce->save();

            return redirect()->route('announcements.index');

        } catch (\Exception $e) {
            $errorMessage = "An error occurred while processing your request."; // Custom error message
            return back()->withErrors($errorMessage)->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
