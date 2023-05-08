<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolios;

class portfolioFrController extends Controller
{
    //
    public function index()
    {
        $portfolios = Portfolios::all();
        return view('Company.portfolio', compact('portfolios'));
    }
}
