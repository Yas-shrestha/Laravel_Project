<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\BlogSingle;

class blogSingleFrController extends Controller
{
    //
    public function index()
    {
        $blogs = Blogs::all();
        $blogSingles = BlogSingle::all();
        return view('Company.blog-single', compact('blogs', 'blogSingles'));
    }
}
