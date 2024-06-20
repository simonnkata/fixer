<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreArtisanRequest;
use App\Http\Requests\UpdateArtisanRequest;
use App\Models\Artisan;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ArtisanCollection;
use App\Http\Resources\V1\ArtisanResource;
use App\Services\V1\ArtisanQuery;
use Illuminate\Http\Request;


class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ArtisanQuery();
        $query = Artisan::query();
        $query = $this->buildQuery($request, Artisan::class, $filter, $query);
        return new ArtisanCollection($query->paginate());
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