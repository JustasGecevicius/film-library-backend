<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\RatedMovies;
use App\Http\Requests\StoreRatedMoviesRequest;
use App\Http\Requests\UpdateRatedMoviesRequest;

class RatedMoviesController extends Controller
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
    public function store(StoreRatedMoviesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RatedMovies $ratedMovies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RatedMovies $ratedMovies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRatedMoviesRequest $request, RatedMovies $ratedMovies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RatedMovies $ratedMovies)
    {
        //
    }
}
