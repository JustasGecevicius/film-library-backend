<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\WishlistedMovies;
use App\Http\Requests\StoreWishlistedMoviesRequest;
use App\Http\Requests\UpdateWishlistedMoviesRequest;

class WishlistedMoviesController extends Controller
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
    public function store(StoreWishlistedMoviesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WishlistedMovies $wishlistedMovies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WishlistedMovies $wishlistedMovies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWishlistedMoviesRequest $request, WishlistedMovies $wishlistedMovies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WishlistedMovies $wishlistedMovies)
    {
        //
    }
}
