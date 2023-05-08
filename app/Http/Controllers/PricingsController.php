<?php

namespace App\Http\Controllers;

use App\Models\Pricings;
use Illuminate\Http\Request;

class PricingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricings = new Pricings;
        $pricings = $pricings->paginate(4);
        return view('Company.admin.Pricings.index', compact('pricings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Company.admin.Pricings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pricings = new Pricings;
        $validate_data = $request->validate(
            [
                'plan' => 'required',
                'cost' => 'required',
                'feature_1' => 'required',
                'feature_2' => 'required',
                'feature_3' => 'required',
                'feature_4' => 'required',
                'feature_5' => 'required',
            ]
        );
        $pricings->plan = $request->plan;
        $pricings->cost = $request->cost;
        $pricings->feature_1 = $request->feature_1;
        $pricings->feature_2 = $request->feature_2;
        $pricings->feature_3 = $request->feature_3;
        $pricings->feature_4 = $request->feature_4;
        $pricings->feature_5 = $request->feature_5;

        $pricings->save();
        return redirect('admin/pricing')->with('message', 'Your data is submitted ');
    }

    /**
     * Display the specified resource.
     *
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pricings = new Pricings;
        $pricings = $pricings->where('id', $id)->First();
        return view('Company.admin.Pricings.show', compact('pricings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pricings = new Pricings;
        $pricings = $pricings->where('id', $id)->First();
        return view('Company.admin.Pricings.edit', compact('pricings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pricings = new Pricings;
        $pricings = $pricings->where('id', $id)->First();
        $pricings->plan = $request->plan;
        $pricings->cost = $request->cost;
        $pricings->feature_1 = $request->feature_1;
        $pricings->feature_2 = $request->feature_2;
        $pricings->feature_3 = $request->feature_3;
        $pricings->feature_4 = $request->feature_4;
        $pricings->feature_5 = $request->feature_5;
        $pricings->update();
        return redirect('admin/pricing');
    }

    /**
     * Remove the specified resource from storage.
     *
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pricings = new Pricings;
        $pricings = $pricings->where('id', $id);
        $pricings->delete();
        return redirect('admin/pricing')->with('message', 'Your data has been deleted');
    }
}
