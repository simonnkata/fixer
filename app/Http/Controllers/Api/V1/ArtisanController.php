<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreArtisanRequest;
use App\Http\Requests\UpdateArtisanRequest;
use App\Models\Artisan;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ArtisanCollection;
use App\Http\Resources\V1\ArtisanResource;

class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ArtisanCollection(Artisan::paginate());
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
    public function store(StoreArtisanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Artisan $artisan)
    {
        return new ArtisanResource($artisan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artisan $artisan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtisanRequest $request, Artisan $artisan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artisan $artisan)
    {
        //
    }
}