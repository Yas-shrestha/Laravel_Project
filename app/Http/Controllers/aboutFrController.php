<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abouts;
use App\Models\Teams;
use App\Models\Skills;
use App\Models\Clients;

class aboutFrController extends Controller
{
    public function index()
    {
        // $abouts = Abouts::all();
        // $teams = Teams::all();
        // $skills = Skills::all();
        // $clients = Clients::all();
        return view('Company.about');
    }
    //
}
