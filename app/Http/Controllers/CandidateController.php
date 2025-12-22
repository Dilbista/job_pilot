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
     public function appliedJobs()
    {
        return view('candidate.appliedjobs'); // resources/views/candidate/applied_jobs.blade.php
    }
    public function favorites()
    {
        return view('candidate.favoritejob'); // resources/views/candidate/favorites.blade.php
    }
    public function jobalert()
    {
        return view('candidate.jobalert'); // resources/views/candidate/jobalert.blade.php
    }
    public function messenger()
    {
        return view('candidate.messenger'); // resources/views/candidate/messenger.blade.php
    }
    public function billing()
    {
        return view('candidate.billing'); // resources/views/candidate/billing.blade.php
    }
    public function settings()
    {
        return view('candidate.settings'); // resources/views/candidate/settings.blade.php
    }
}