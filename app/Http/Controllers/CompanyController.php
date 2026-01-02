<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('company.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function createJob()
    {
        return view('company.create_job');
    }

    public function myJobs()
    {
        return view('company.my_job');
    }

    public function candidates()
    {
        return view('company.candidate');
    }

    public function pricing()
    {
        return view('company.pricing_plan');
    }
    public function pricePlanPayment()
    {
        return view('company.pricing_plan_payment');
    }
    public function termsCondition()
    {
        return view('company.terms_&_condition');
    }
    public function privacyPolicy()
    {
        return view('company.privacy_&_policy');
    }

    public function refoundPolicy()
    {
        return view('company.refound_policy');
    }

    public function faq()
    {
        return view('company.faq');
    }

     public function applicationView()
    {
        return view('company.view_application');
    }
    public function promoteJob(){
        return view('company.promote_job');
    }
     public function viewDetails(){
        return view('company.detail_view_job');
    }
}
