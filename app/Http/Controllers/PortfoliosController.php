<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;
use App\Models\Portfolios;

class PortfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = new Portfolios;
        $portfolios = $portfolios->paginate(4);
        return view('Company.admin.Portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files = Files::all();
        return view('Company.admin.Portfolios.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolios = new Portfolios;
        $validate_data = $request->validate(
            [
                'img' => 'required',
                'title' => 'required',
                'description' => 'required',
            ]
        );
        $portfolios->img = $request->img;
        $portfolios->title = $request->title;
        $portfolios->description = $request->description;

        $portfolios->save();
        return redirect('admin/portfolio')->with('message', 'Your data is submitted ');
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
        $portfolios = new Portfolios;
        $portfolios = $portfolios->where('id', $id)->First();
        return view('Company.admin.Portfolios.show', compact('portfolios'), compact('files'));
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
        $portfolios = new Portfolios;
        $portfolios = $portfolios->where('id', $id)->First();
        return view('Company.admin.Portfolios.edit', compact('portfolios'), compact('files'));
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
        $portfolios = new Portfolios;
        $portfolios = $portfolios->where('id', $id)->First();
        $portfolios->img = $request->img;
        $portfolios->title = $request->title;
        $portfolios->description = $request->description;
        $portfolios->update();
        return redirect('admin/portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolios = new Portfolios;
        $portfolios = $portfolios->where('id', $id);
        $portfolios->delete();
        return redirect('admin/portfolio')->with('message', 'Your data has been deleted');
    }
}
