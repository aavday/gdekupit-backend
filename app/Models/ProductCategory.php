<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductCategory extends Model
{
    use HasFactory;

    public function parentCategory(): HasOne
    {
        return $this->hasOne(self::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
