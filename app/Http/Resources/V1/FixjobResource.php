<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FixjobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'category' => $this->category,
            'description' => $this->description,
            'status' => $this->status,
            'price' => $this->price,
            'street' => $this->address->street,
            'city' => $this->address->city,
            'postalCode' => $this->address->postal_code,
            'customer' => [
                'id' => $this->customer->id,
                'name' => $this->customer->name,
                'email' => $this->customer->email,
                'phone' => $this->customer->phone
            ],
            'artisan' => new ArtisanResource($this->artisan),
            'bids' => new BidCollection($this->bids),
        ];
    }
}
