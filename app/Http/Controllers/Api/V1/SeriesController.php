<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Series;
use App\Http\Requests\StoreSeriesRequest;
use App\Http\Requests\UpdateSeriesRequest;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Series::all();
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
    public function store(StoreSeriesRequest $request)
    {
        return Series::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Series $series)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Series $series)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSeriesRequest $request, string $series)
    {
        $series = Series::find($series);
        $series->update($request->all());
        return $series;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Series $series)
    {
        Series::destroy($series);
    }

    public function search(string $title)
    {
        Series::where('title', 'like', '%' . $title . '%')->get();
    }
}
