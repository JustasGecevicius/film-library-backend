<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\LikedMovies;
use App\Http\Requests\StoreLikedMoviesRequest;
use App\Http\Requests\UpdateLikedMoviesRequest;

class LikedMoviesController extends Controller
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
    public function store(StoreLikedMoviesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LikedMovies $likedMovies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LikedMovies $likedMovies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLikedMoviesRequest $request, LikedMovies $likedMovies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LikedMovies $likedMovies)
    {
        //
    }
}
