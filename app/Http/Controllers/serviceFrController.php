<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Features;

class serviceFrController extends Controller
{
    //
    public function index()
    {
        $services = Services::all();
        $features = Features::all();
        return view('Company.services', compact('services', 'features'));
    }
}
