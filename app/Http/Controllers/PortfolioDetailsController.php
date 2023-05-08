<?php

namespace App\Http\Controllers;

use App\Models\Files;
use App\Models\Portfolio_details;
use Illuminate\Http\Request;

class PortfolioDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfoliodetails = new Portfolio_details;
        $portfoliodetails = $portfoliodetails->paginate(4);
        return view('Company.admin.Portfoliodetails.index', compact('portfoliodetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files = Files::all();
        return view('Company.admin.Portfoliodetails.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfoliodetails = new Portfolio_details;
        $validate_data = $request->validate(
            [
                'img' => 'required',
                'category' => 'required',
                'client' => 'required',
                'date' => 'required',
                'url' => 'required',
                'title' => 'required',
                'description' => 'required',
            ]
        );
        $portfoliodetails->img = $request->img;
        $portfoliodetails->category = $request->category;
        $portfoliodetails->client = $request->client;
        $portfoliodetails->date = $request->date;
        $portfoliodetails->date = $request->date;
        $portfoliodetails->url = $request->url;
        $portfoliodetails->title = $request->title;
        $portfoliodetails->description = $request->description;

        $portfoliodetails->save();
        return redirect('admin/portfoliodetail')->with('message', 'Your data is submitted ');
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
        $portfoliodetails = new Portfolio_details;
        $portfoliodetails = $portfoliodetails->where('id', $id)->First();
        return view('Company.admin.Portfoliodetails.show', compact('portfoliodetails'), compact('files'));
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
        $portfoliodetails = new Portfolio_details;
        $portfoliodetails = $portfoliodetails->where('id', $id)->First();
        return view('Company.admin.Portfoliodetails.edit', compact('portfoliodetails'), compact('files'));
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
        $portfoliodetails = new Portfolio_details;
        $portfoliodetails = $portfoliodetails->where('id', $id)->First();
        $portfoliodetails->img = $request->img;
        $portfoliodetails->category = $request->category;
        $portfoliodetails->client = $request->client;
        $portfoliodetails->date = $request->date;
        $portfoliodetails->date = $request->date;
        $portfoliodetails->url = $request->url;
        $portfoliodetails->title = $request->title;
        $portfoliodetails->description = $request->description;
        $portfoliodetails->update();
        return redirect('admin/portfoliodetail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfoliodetails = new Portfolio_details;
        $portfoliodetails = $portfoliodetails->where('id', $id);
        $portfoliodetails->delete();
        return redirect('admin/portfoliodetail')->with('message', 'Your data has been deleted');
    }
}
