<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admins = new User;
        $admins = $admins->paginate(4);
        return view('Company.admin.Admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Company.admin.Admins.create');
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
        $admins = new User;
        $validate_data = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'role' => 'required',
            ]
        );
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->password = $request->password;
        $admins->role = $request->role;

        $admins->save();
        return redirect('admin/admin')->with('message', 'Your data is submitted ');
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
        $admins = new User;
        $admins = $admins->where('id', $id)->First();
        return view('Company.admin.Admins.show', compact('admins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $admins = new User;
        $admins = $admins->where('id', $id)->First();
        return view('Company.admin.Admins.edit', compact('admins'));
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
        //
        $admins = new User;
        $admins = $admins->where('id', $id)->First();
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->password = $request->password;
        $admins->role = $request->role;
        $admins->update();
        return redirect('admin/admin');
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
        $admins = new User;
        $admins = $admins->where('id', $id)->first();
        $admins->delete();
        return redirect('admin/admin')->with('message', 'Your data has been deleted');
    }
}
