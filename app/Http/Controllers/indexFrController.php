<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliders;
use App\Models\Abouts;
use App\Models\Services;
use App\Models\Portfolios;
use App\Models\Clients;

class indexFrController extends Controller
{
    public function index()
    {
        $services = Services::all();
        $portfolios = Portfolios::all();
        $abouts = Abouts::first();
        $clients = Clients::all();
        $sliders = Sliders::all();
        return view('Company.index', compact('sliders', 'clients', 'abouts', 'portfolios', 'services'));
    }
}
