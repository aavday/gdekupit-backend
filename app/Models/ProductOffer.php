<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductOffer extends Model
{
    use HasFactory;

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }

    public function merchant(): HasOne
    {
        return $this->hasOne(ProductMerchant::class);
    }

    public function color(): HasOne
    {
        return $this->hasOne(ProductColor::class);
    }
}
