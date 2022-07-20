<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOffer extends Model
{
    use HasFactory;

    public function product(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Product::class);
    }

    public function merchant(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ProductMerchant::class);
    }

    public function color(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ProductColor::class);
    }
}
