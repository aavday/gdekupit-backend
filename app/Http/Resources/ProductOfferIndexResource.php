<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductOfferIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'price' => $this->price,
            'product' => ProductIndexResource::make($this->product),
            'merchant' => ProductMerchantIndexResource::make($this->merchant),
            'color' => ProductColorResource::make($this->color),
        ];
    }
}
