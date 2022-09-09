<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductMerchant extends Model
{
    use HasFactory;

    public function productOffers(): HasMany
    {
        return $this->hasMany(ProductOffer::class, 'merchant_id');
    }
}
