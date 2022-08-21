<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(ProductBrand::class);
    }

    public function offers(): HasMany
    {
        return $this->hasMany(ProductOffer::class);
    }

    public static function getMinPriceOfOffers($offers) {
        if (!$offers) return null;

        $priceFrom = 0;

        foreach ($offers as $key => $offer) {
            if ($key === 0) {
                $priceFrom = $offer['price'];
            } else if ($key > 0 && $offer['price'] < $priceFrom) {
                $priceFrom = $offer['price'];
            }
        }

        return $priceFrom;
    }
}
