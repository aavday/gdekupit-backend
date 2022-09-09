<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductReviewResource extends JsonResource
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
            'review_text' => $this->review_text,
            'pluses' => $this->pluses,
            'minuses' => $this->minuses,
            'rating' => $this->rating,
            'product_id' => $this->product_id,
            'user_id' => $this->user_id
        ];
    }
}
