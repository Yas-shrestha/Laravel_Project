<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Features;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $features = new Features;
        $features = $features->paginate(4);
        return view('Company.admin.Features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Company.admin.Features.create');
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
        $features = new Features;
        $validate_data = $request->validate(
            [
                'logo' => 'required',
                'title' => 'required',
            ]
        );
        $features->logo = $request->logo;
        $features->title = $request->title;
        $features->save();
        return redirect('admin/feature')->with('message', 'Your data is submitted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $features = new Features;
        $features = $features->where('id', $id)->First();
        return view('Company.admin.Features.show', compact('features'));
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
        $features = new Features;
        $features = $features->where('id', $id)->First();
        return view('Company.admin.Features.edit', compact('features'));
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
        $features = new Features;
        $features = $features->where('id', $id)->First();
        $features->logo = $request->logo;
        $features->title = $request->title;
        $features->update();
        return redirect('admin/feature');
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
        $features = new Features;
        $features = $features->where('id', $id);
        $features->delete();
        return redirect('admin/feature')->with('message', 'Your data has been deleted');
    }
}
