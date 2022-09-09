<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductShowResource extends JsonResource
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
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'price_from' => Product::getMinPriceOfOffers($this->offers),
            'offers' => ProductOfferIndexResource::collection($this->offers),
            'brand' => ProductBrandIndexResource::make($this->brand),
            'category' => ProductCategoryIndexResource::make($this->category),
            'reviews' => ProductReviewResource::collection($this->reviews)
        ];
    }
}
