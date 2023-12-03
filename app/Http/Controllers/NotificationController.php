<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Yajra\Datatables\Datatables;
use DB;
use DateTime;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $notif = Notification::all();

        if ($request->ajax()) {
            $data = $notif;
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', 'admin.notifications.action')
                    // ->addColumn('checkbox', function($row){
                    //     return '<input type="checkbox" name="sl_checkbox" data-id="'.$row['id'].'"><label></label>';
                    // })
                    // ->rawColumns(['checkbox','action'])
                    ->make();
        }

        return view('admin.notifications.index', compact('notif'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.notifications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            // dd("HEY");
            $notif = new Notification;
            $notif->description = $request->description;
            
            $notif->save();

            return redirect()->route('notifications.index');

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
