<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    use HasFactory;

    public function parentCategory(): BelongsTo
    {
        return $this->belongsTo(self::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
