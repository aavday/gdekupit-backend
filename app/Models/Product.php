<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    public function category(): HasOne
    {
        return $this->hasOne(ProductCategory::class);
    }

    public function brand(): HasOne
    {
        return $this->hasOne(ProductBrand::class);
    }

    public function offers(): HasMany
    {
        return $this->hasMany(ProductOffer::class);
    }
}
