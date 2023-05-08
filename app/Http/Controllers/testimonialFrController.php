<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;

class testimonialFrController extends Controller
{
    public function index()
    {
        $testimonials = Testimonials::all();
        return view('Company.testimonials', compact('testimonials'));
    }
    //
}
