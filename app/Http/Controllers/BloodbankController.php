<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use App\Models\Bloodbank;
use Illuminate\Http\Request;

class BloodbankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bbanks = Bloodbank::all();
        return view('backend.bloodbank.index',compact('bbanks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.bloodbank.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bbank = new Bloodbank();
        $bbank->name = $request->name;
        $bbank->no = $request->no;
        $bbank->location = $request->location;
        $bbank->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bbank = Bloodbank::find($id);
        return view('backend.bloodbank.show', compact('bbank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bbank = Bloodbank::find($id);
        return view('backend.bloodbank.edit',compact('bbank'));
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
        $bbank = Bloodbank::find($id);
        $bbank->name = $request->name;
        $bbank->no = $request->no;
        $bbank->location = $request->location;
        $bbank->update();
        return redirect()->back();
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
