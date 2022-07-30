<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        $priceFrom = null;

        if ($this->offers) {
            foreach ($this->offers as $key => $offer) {
                if ($key === 0) {
                    $priceFrom = $offer['price'];
                } else if ($key > 0 && $offer['price'] < $priceFrom) {
                    $priceFrom = $offer['price'];
                }
            }
        }

        return [
            'name' => $this->name,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'price_from' => $priceFrom
        ];
    }
}
