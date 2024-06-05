<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Movies;
use App\Http\Requests\StoreMoviesRequest;
use App\Http\Requests\UpdateMoviesRequest;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Movies::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMoviesRequest $request)
    {
        return Movies::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Movies $movies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movies $movies)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMoviesRequest $request, $movies)
    {
        $movie = Movies::find($movies);
        $movie->update($request->all());
        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $movies)
    {
        Movies::destroy($movies);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function search(string $title)
    {
        Movies::where('title', 'like', '%' . $title . '%')->get();
    }
}
