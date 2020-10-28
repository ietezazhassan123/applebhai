<?php

namespace App\Http\Controllers;

use App\StaffCustomerDeal;
use Illuminate\Http\Request;

class StaffCustomerDealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboards.SupportStaff.customers.all_customers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dashboards.SupportStaff.customers.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StaffCustomerDeal  $staffCustomerDeal
     * @return \Illuminate\Http\Response
     */
    public function show(StaffCustomerDeal $staffCustomerDeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StaffCustomerDeal  $staffCustomerDeal
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffCustomerDeal $staffCustomerDeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StaffCustomerDeal  $staffCustomerDeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaffCustomerDeal $staffCustomerDeal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StaffCustomerDeal  $staffCustomerDeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffCustomerDeal $staffCustomerDeal)
    {
        //
    }
}
