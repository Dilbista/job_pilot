<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index()
    {
        return view('dashboard.index');
    }
    public function profile()
    {
        return view('dashboard.my_profile');
    }

    public function settings()
    {
        return view('dashboard.setting');
    }

    public function savedCandidates()
    {
        return view('dashboard.saved_candidate');
    }

    public function billing()
    {
        return view('dashboard.plan_&_billing');
    }

    public function verifyAccount()
    {
        return view('dashboard.verify_account');
    }

    public function messenger()
    {
        return view('dashboard.messanger');
    }

    public function customQuestion()
    {
        return view('dashboard.custom_question');
    }
    public function invoice()
    {
        return view('dashboard.invoice');
    }
    public function createCategory(){
        return view('dashboard.category');
    }
}