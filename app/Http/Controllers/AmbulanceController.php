<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambulances = Ambulance::all();
        return view('backend.ambulance.index',compact('ambulances'));
    }

    public function page()
    {
        $ambulances = Ambulance::all();
        return view('frontend.dashboard.app',compact('ambulances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ambulance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambulance = new Ambulance();
        $ambulance->name = $request->name;
        $ambulance->location = $request->location;
        $ambulance->no = $request->no;
        $ambulance->save();
        return redirect('/ambulance');
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
        $ambulance = Ambulance::find($id);
        return view('backend.ambulance.edit',compact('ambulance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ambulance = Ambulance::find($id);
        $ambulance->name = $request->name;
        $ambulance->location = $request->location;
        $ambulance->no = $request->no;
        $ambulance->update();
        return redirect('/ambulance');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ambulance = Ambulance::find($id);
        $ambulance->delete();
        return redirect('/ambulance');
    }
}
