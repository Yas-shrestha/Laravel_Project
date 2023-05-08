<?php

namespace App\Http\Controllers;

use App\Models\Files;
use App\Models\BlogSingle;
use Illuminate\Http\Request;

class BlogSingleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogSingles = new BlogSingle;
        $blogSingles = $blogSingles->paginate(4);
        return view('Company.admin.blog_single.index', compact('blogSingles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files = Files::all();
        return view('Company.admin.blog_single.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogSingles = new BlogSingle;
        $validate_data = $request->validate(
            [
                'img' => 'required',
                'title' => 'required',
                'desc' => 'required',
            ]
        );
        $blogSingles->img = $request->img;
        $blogSingles->title = $request->title;
        $blogSingles->desc = $request->desc;
        $blogSingles->save();
        return redirect('admin/blogsingle')->with('message', 'Your data is submitted ');
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
        $blogSingles = new BlogSingle;
        $blogSingles = $blogSingles->where('id', $id)->First();
        return view('Company.admin.blog_single.show', compact('blogSingles'), compact('files'));
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
        $blogSingles = new BlogSingle;
        $blogSingles = $blogSingles->where('id', $id)->First();
        return view('Company.admin.blog_single.edit', compact('blogSingles'), compact('files'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $blogSingles = new BlogSingle;
        $blogSingles = $blogSingles->where('id', $id)->First();
        $blogSingles->img = $request->img;
        $blogSingles->title = $request->title;
        $blogSingles->desc = $request->desc;
        $blogSingles->update();
        return redirect('admin/blogsingle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogSingles = new BlogSingle;
        $blogSingles = $blogSingles->where('id', $id);
        $blogSingles->delete();
        return redirect('admin/blogsingle')->with('message', 'Your data has been deleted');
    }
}
