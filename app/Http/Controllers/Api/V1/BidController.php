<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreBidRequest;
use App\Http\Requests\UpdateBidRequest;
use App\Models\Bid;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\BidCollection;
use App\Http\Resources\V1\BidResource;
use App\Services\V1\BidQuery;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new BidQuery();
        $query = Bid::query();
        $query = $this->buildQuery($request, Bid::class, $filter, $query);
        return new BidCollection($query->paginate());
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
    public function store(StoreBidRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bid $bid)
    {
        return new BidResource($bid);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBidRequest $request, Bid $bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bid $bid)
    {
        //
    }
}