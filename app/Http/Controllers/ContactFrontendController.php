<?php

namespace App\Http\Controllers;

use App\Models\ContactFrontend;
use Illuminate\Http\Request;

class ContactFrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactFrontends = new ContactFrontend;
        $contactFrontends = $contactFrontends->paginate(4);
        return view('Company.admin.Contact_frontend.index', compact('contactFrontends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Company.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contactFrontends = new ContactFrontend;
        $validate_data = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]
        );
        $contactFrontends->name = $request->name;
        $contactFrontends->email = $request->email;
        $contactFrontends->subject = $request->subject;
        $contactFrontends->message = $request->message;
        $contactFrontends->save();
        return redirect('contactFrontend')->with('message', 'Your data is submitted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactFrontend  $contactFrontend
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $contactFrontends = new ContactFrontend;
        $contactFrontends = $contactFrontends->where('id', $id)->First();
        return view('Company.admin.Contact_frontend.show', compact('contactFrontends'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactFrontend  $contactFrontend
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactFrontends = new ContactFrontend;
        $contactFrontends = $contactFrontends->where('id', $id)->First();
        return view('Company.admin.Contact_frontend.edit', compact('contactFrontends'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactFrontend  $contactFrontend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contactFrontends = new ContactFrontend;
        $contactFrontends = $contactFrontends->where('id', $id)->First();
        $contactFrontends->email = $request->email;
        $contactFrontends->name = $request->name;
        $contactFrontends->subject = $request->subject;
        $contactFrontends->message = $request->message;
        $contactFrontends->update();
        return redirect('admin/contactFrontend');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactFrontend  $contactFrontend
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactFrontends = new ContactFrontend;
        $contactFrontends = $contactFrontends->where('id', $id);
        $contactFrontends->delete();
        return redirect('admin/contactFrontend')->with('message', 'Your data has been deleted');
    }
}
