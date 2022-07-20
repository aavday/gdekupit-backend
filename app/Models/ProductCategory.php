<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    public function parentCategory(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(self::class);
    }
}
