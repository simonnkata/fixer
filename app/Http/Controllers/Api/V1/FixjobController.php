<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreFixjobRequest;
use App\Http\Requests\UpdateFixjobRequest;
use App\Models\Fixjob;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\FixjobCollection;
use App\Http\Resources\V1\FixjobResource;
use App\Services\V1\FixjobQuery;
use Illuminate\Http\Request;

class FixjobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new FixjobQuery();
        $query = Fixjob::query();
        $query = $this->buildQuery($request, Fixjob::class, $filter, $query);
        return new FixjobCollection($query->paginate());
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
    public function store(StoreFixjobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fixjob $fixjob)
    {
        return new FixjobResource($fixjob);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fixjob $fixjob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFixjobRequest $request, Fixjob $fixjob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fixjob $fixjob)
    {
        //
    }
}