<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\WishlistedSeries;
use App\Http\Requests\StoreWishlistedSeriesRequest;
use App\Http\Requests\UpdateWishlistedSeriesRequest;

class WishlistedSeriesController extends Controller
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
    public function store(StoreWishlistedSeriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WishlistedSeries $wishlistedSeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WishlistedSeries $wishlistedSeries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWishlistedSeriesRequest $request, WishlistedSeries $wishlistedSeries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WishlistedSeries $wishlistedSeries)
    {
        //
    }
}
