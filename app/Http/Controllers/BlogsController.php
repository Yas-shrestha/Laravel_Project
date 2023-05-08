<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Files;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = new Blogs;
        $blogs = $blogs->paginate(4);
        return view('Company.admin.Blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files = Files::all();
        return view('Company.admin.Blogs.create', compact('files'));

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogs = new Blogs;
        $validate_data = $request->validate(
            [
                'img' => 'required',
                'title' => 'required',
                'name' => 'required',
                'date' => 'required',
                'description' => 'required',
            ]
        );
        $blogs->img = $request->img;
        $blogs->title = $request->title;
        $blogs->name = $request->name;
        $blogs->date = $request->date;
        $blogs->description = $request->description;

        $blogs->save();
        return redirect('admin/blog')->with('message', 'Your data is submitted ');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $files = Files::all();
        $blogs = new Blogs;
        $blogs = $blogs->where('id', $id)->First();
        return view('Company.admin.Blogs.show', compact('blogs'), compact('files'));
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
        $files = Files::all();
        $blogs = new Blogs;
        $blogs = $blogs->where('id', $id)->First();
        return view('Company.admin.Blogs.edit', compact('blogs'), compact('files'));
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
        $blogs = new Blogs;
        $blogs = $blogs->where('id', $id)->First();
        $blogs->img = $request->img;
        $blogs->title = $request->title;
        $blogs->name = $request->name;
        $blogs->date = $request->date;
        $blogs->description = $request->description;
        $blogs->update();
        return redirect('admin/blog');
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
        $blogs = new Blogs;
        $blogs = $blogs->where('id', $id);
        $blogs->delete();
        return redirect('admin/blog')->with('message', 'Your data has been deleted');
    }
}
