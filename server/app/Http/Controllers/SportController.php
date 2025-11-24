<?php

namespace App\Http\Controllers;

use App\Models\sport;
use App\Http\Requests\StoresportRequest;
use App\Http\Requests\UpdatesportRequest;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(sport $sport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesportRequest $request, sport $sport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sport $sport)
    {
        //
    }
}
