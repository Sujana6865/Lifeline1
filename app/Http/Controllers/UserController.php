<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('backend.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->name;
        $users->password = Hash::make($request->password);
        $users->email = $request->email;
        $users->blood = $request->blood;
        $users->mobile = $request->mobile;
        $users->location = $request->location;
        $users->is_admin = $request->is_admin;
        $users->save();
        return redirect('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('frontend.user.show',compact('user'));
    }

 
     public function search(Request $request){
        $user = $request->user;
        $userQuery = User::where('blood',$request->blood);
        if($user){
            $userQuery->whereKeyNot($user->id);
        }
        if($request->location){
            $userQuery->where('location', 'LIKE', '%'.$request->location.'%');
        }
        $users = $userQuery->get();
        return view('frontend.user.index',compact('users'));
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.user.edit',compact('user'));
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
        $users = User::find($id);
        $users->name = $request->name;
        $users->password = Hash::make($request->password);
        $users->email = $request->email;
        $users->mobile = $request->mobile;
        $users->blood = $request->blood;
        $users->location = $request->location;
        $users->is_admin = $request->is_admin;
        $users->update();
        return redirect('/user');
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
