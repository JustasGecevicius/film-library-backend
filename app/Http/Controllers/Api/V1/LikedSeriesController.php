<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\LikedSeries;
use App\Http\Requests\StoreLikedSeriesRequest;
use App\Http\Requests\UpdateLikedSeriesRequest;

class LikedSeriesController extends Controller
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
    public function store(StoreLikedSeriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LikedSeries $likedSeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LikedSeries $likedSeries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLikedSeriesRequest $request, LikedSeries $likedSeries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LikedSeries $likedSeries)
    {
        //
    }
}
