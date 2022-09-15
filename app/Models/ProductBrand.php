<?php

namespace App\Models;

use Database\Factories\ProductBrandFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProductBrand
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $slug
 * @property string $name
 * @property-read Collection|Product[] $products
 * @property-read int|null $products_count
 * @method static ProductBrandFactory factory(...$parameters)
 * @method static Builder|ProductBrand newModelQuery()
 * @method static Builder|ProductBrand newQuery()
 * @method static Builder|ProductBrand query()
 * @method static Builder|ProductBrand whereCreatedAt($value)
 * @method static Builder|ProductBrand whereId($value)
 * @method static Builder|ProductBrand whereName($value)
 * @method static Builder|ProductBrand whereSlug($value)
 * @method static Builder|ProductBrand whereUpdatedAt($value)
 */
class ProductBrand extends Model
{
    use HasFactory;

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
