<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio_details;

class portfolioDetailFrController extends Controller
{
    public function index()
    {
        $portfolioDetails = Portfolio_details::all();
        return view('Company.portfolio-details', compact('portfolioDetails'));
    }
    //
}
