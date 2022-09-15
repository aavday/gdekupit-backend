<?php

namespace App\Http\Resources;

use App\Models\ProductBrand;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class ProductCategoryShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        $brandIds = [];

        foreach ($this->products as $product) {
            $brandIds[] = $product->id;
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'parent_category_id' => $this->parent_category_id,
            'child_categories' => ProductCategoryShowResource::collection($this->childCategories),
            'products' => ProductIndexResource::collection($this->products),
            'brands' => ($brandIds)
                ? ProductBrandIndexResource::collection(ProductBrand::query()->where('id', '=', $brandIds)->get())
                : null
        ];
    }
}
