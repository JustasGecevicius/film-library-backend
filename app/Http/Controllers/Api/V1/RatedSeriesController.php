<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\RatedSeries;
use App\Http\Requests\StoreRatedSeriesRequest;
use App\Http\Requests\UpdateRatedSeriesRequest;

class RatedSeriesController extends Controller
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
    public function store(StoreRatedSeriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RatedSeries $ratedSeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RatedSeries $ratedSeries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRatedSeriesRequest $request, RatedSeries $ratedSeries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RatedSeries $ratedSeries)
    {
        //
    }
}
