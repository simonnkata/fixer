<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtisanResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone_number,
            'verificationStatus' => $this->verification_status,
            'rating' => $this->rating,
            'street' => $this->address->street,
            'city' => $this->address->city,
            'postalCode' => $this->address->postal_code,
        ];
    }
}