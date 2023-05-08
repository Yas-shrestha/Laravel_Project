<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = new Skills;
        $skills = $skills->paginate(4);
        return view('Company.admin.Skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Company.admin.Skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skills = new Skills;
        $validate_data = $request->validate(
            [
                'title' => 'required',
            ]
        );
        $skills->title = $request->title;
        $skills->save();
        return redirect('admin/skill')->with('message', 'Your data is submitted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skills = new Skills;
        $skills = $skills->where('id', $id)->First();
        return view('Company.admin.Skills.show', compact('skills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skills = new Skills;
        $skills = $skills->where('id', $id)->First();
        return view('Company.admin.Skills.edit', compact('skills'));
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
        $skills = new Skills;
        $skills = $skills->where('id', $id)->First();
        $skills->title = $request->title;
        $skills->update();
        return redirect('admin/skill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skills = new Skills;
        $skills = $skills->where('id', $id)->first();
        $skills->delete();
        return redirect('admin/skill')->with('message', 'Your data has been deleted'); //
    }
}
