<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use App\Models\Files;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = new Teams;
        $teams = $teams->paginate(4);
        return view('Company.admin.Teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files = Files::all();
        return view('Company.admin.Teams.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teams = new Teams;
        $validate_data = $request->validate(
            [
                'img' => 'required',
                'twitter' => 'required',
                'facebook' => 'required',
                'instagram' => 'required',
                'linkedin' => 'required',
                'name' => 'required',
                'post' => 'required',
            ]
        );
        $teams->img = $request->img;
        $teams->twitter = $request->twitter;
        $teams->facebook = $request->facebook;
        $teams->instagram = $request->instagram;
        $teams->linkedin = $request->linkedin;
        $teams->name = $request->name;
        $teams->post = $request->post;

        $teams->save();
        return redirect('admin/team')->with('message', 'Your data is submitted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $files = Files::all();
        $teams = new Teams;
        $teams = $teams->where('id', $id)->First();
        return view('Company.admin.Teams.show', compact('teams'), compact('files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $files = Files::all();
        $teams = new Teams;
        $teams = $teams->where('id', $id)->First();
        return view('Company.admin.Teams.edit', compact('teams', 'files'));
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
        $teams = new Teams;
        $teams = $teams->where('id', $id)->First();
        $teams->img = $request->img;
        $teams->twitter = $request->twitter;
        $teams->facebook = $request->facebook;

        $teams->instagram = $request->instagram;
        $teams->linkedin = $request->linkedin;
        $teams->name = $request->name;
        $teams->post = $request->post;
        $teams->update();
        return redirect('admin/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams = new Teams;
        $teams = $teams->where('id', $id);
        $teams->delete();
        return redirect('admin/team')->with('message', 'Your data has been deleted');
    }
}
