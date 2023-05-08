<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = new Services;
        $services = $services->paginate(4);
        return view('Company.admin.Services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Company.admin.Services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $services = new Services;
        $validate_data = $request->validate(
            [
                'logo' => 'required',
                'title' => 'required',
                'description' => 'required',
            ]
        );
        $services->logo = $request->logo;
        $services->title = $request->title;
        $services->description = $request->description;
        $services->save();
        return redirect('admin/service')->with('message', 'Your data is submitted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services = new Services;
        $services = $services->where('id', $id)->First();
        return view('Company.admin.Services.show', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = new Services;
        $services = $services->where('id', $id)->First();
        return view('Company.admin.Services.edit', compact('services'));
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
        $services = new Services;
        $services = $services->where('id', $id)->First();
        $services->logo = $request->logo;
        $services->title = $request->title;
        $services->description = $request->description;
        $services->update();
        return redirect('admin/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = new Services;
        $services = $services->where('id', $id)->first();
        $services->delete();
        return redirect('admin/service')->with('message', 'Your data has been deleted');
    }
}
