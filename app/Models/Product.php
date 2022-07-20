<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ProductCategory::class);
    }

    public function brand(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ProductBrand::class);
    }
}
