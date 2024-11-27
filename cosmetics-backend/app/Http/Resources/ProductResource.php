<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProductResource extends JsonResource
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
            'product_id'=> $this->product_id,
            'product_name' => $this->product_name,
            'product_category'=> $this->product_category,
            'product_description' => $this->product_description,
            'directions'=> $this->directions,
            'price' => $this->price,
            'in_stock'=> $this->in_stock,
            'product_image' => asset(Storage::url($this->product_image)),
        ];
    }
}
