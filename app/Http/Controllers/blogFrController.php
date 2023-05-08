<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class blogFrController extends Controller
{
    //
    public function index()
    {
        $blogs = Blogs::all();
        return view('Company.blog', compact('blogs'));
    }
}
