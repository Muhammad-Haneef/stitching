<?php

namespace App\Http\Controllers;

use App\Models\SmsGateway;
use App\Http\Requests\StoreSmsGatewayRequest;
use App\Http\Requests\UpdateSmsGatewayRequest;

class SmsGatewayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreSmsGatewayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SmsGateway $smsGateway)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SmsGateway $smsGateway)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSmsGatewayRequest $request, SmsGateway $smsGateway)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SmsGateway $smsGateway)
    {
        //
    }
}
