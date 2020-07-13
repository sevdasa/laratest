<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\updateRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminDashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user=auth()->user();
        return view('admin.panel.index',['user'=> $user])->withErrors(['عملیات با موفقیت انجام شد'],'sucess');


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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)

    {
        $user= auth()->user();
        return User::find($user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)

    {
        $user= auth()->user();
        return view('admin.panel.edit',['user'=>$user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(updateRequest $request, User $user)
    {
        $user= auth()->user();
        $user -> email = $request['email'];
        $user -> password = Hash::make($request['password']);
        $user -> save();

        return redirect('/admin/paneladmin');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
