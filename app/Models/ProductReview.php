<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;

    public function product(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Product::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class);
    }
}
