<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\Files;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = new Clients;
        $clients = $clients->paginate(4);
        return view('Company.admin.Clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files = Files::all();
        return view('Company.admin.Clients.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clients = new Clients;
        $validate_data = $request->validate(
            [
                'img' => 'required',
            ]
        );
        $clients->img = $request->img;
        $clients->save();
        return redirect('admin/client')->with('message', 'Your data is submitted ');
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
        $clients = new Clients;
        $clients = $clients->where('id', $id)->First();
        return view('Company.admin.Clients.show', compact('clients', 'files'));
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
        $clients = new Clients;
        $clients = $clients->where('id', $id)->First();
        return view('Company.admin.Clients.edit', compact('clients', 'files'));
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
        $clients = new Clients;
        $clients = $clients->where('id', $id)->First();
        $clients->img = $request->img;
        $clients->update();
        return redirect('admin/client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients = new Clients;
        $clients = $clients->where('id', $id);
        $clients->delete();
        return redirect('admin/client')->with('message', 'Your data has been deleted');
    }
}
