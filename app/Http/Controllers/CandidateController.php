<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    // Show candidate index page
    public function index()
    {
        return view('candidate.index'); // resources/views/candidate/index.blade.php
    }

    // Show candidate dashboard page
    public function dashboard()
    {
        return view('candidate.dashboard'); // resources/views/candidate/dashboard.blade.php
    }
}
