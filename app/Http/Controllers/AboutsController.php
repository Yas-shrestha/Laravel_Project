<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abouts;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abouts = new Abouts;
        $abouts = $abouts->paginate(4);
        return view('Company.admin.Abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Company.admin.Abouts.create');
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
        $abouts = new Abouts;
        $validate_data = $request->validate(
            [
                'top_title' => 'required',
                'title' => 'required',
                'top_desc' => 'required',
                'description' => 'required',
            ]
        );
        $abouts->top_title = $request->top_title;
        $abouts->title = $request->title;
        $abouts->top_desc = $request->top_desc;
        $abouts->description = $request->description;

        $abouts->save();
        return redirect('admin/about')->with('message', 'Your data is submitted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abouts = new Abouts;
        $abouts = $abouts->where('id', $id)->First();
        return view('Company.admin.Abouts.show', compact('abouts'));
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
        //
        $abouts = new Abouts;
        $abouts = $abouts->where('id', $id)->First();
        return view('Company.admin.Abouts.edit', compact('abouts'));
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
        $abouts = new Abouts;
        $abouts = $abouts->where('id', $id)->First();
        $abouts->top_title = $request->top_title;
        $abouts->title = $request->title;
        $abouts->top_desc = $request->top_desc;
        $abouts->description = $request->description;
        $abouts->update();
        return redirect('admin/about');
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
        $abouts = new Abouts;
        $abouts = $abouts->where('id', $id);
        $abouts->delete();
        return redirect('admin/about')->with('message', 'Your data has been deleted');
    }
}
