<?php

namespace App\Models;

use Database\Factories\ProductCategoryFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProductCategory
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $slug
 * @property string $name
 * @property int|null $parent_category_id
 * @property-read Collection|ProductCategory[] $childCategories
 * @property-read int|null $child_categories_count
 * @property-read Collection|Product[] $products
 * @property-read int|null $products_count
 * @method static ProductCategoryFactory factory(...$parameters)
 * @method static Builder|ProductCategory newModelQuery()
 * @method static Builder|ProductCategory newQuery()
 * @method static Builder|ProductCategory query()
 * @method static Builder|ProductCategory whereCreatedAt($value)
 * @method static Builder|ProductCategory whereId($value)
 * @method static Builder|ProductCategory whereName($value)
 * @method static Builder|ProductCategory whereParentCategoryId($value)
 * @method static Builder|ProductCategory whereSlug($value)
 * @method static Builder|ProductCategory whereUpdatedAt($value)
 */
class ProductCategory extends Model
{
    use HasFactory;

    public function childCategories(): HasMany
    {
        return $this->hasMany(self::class, 'parent_category_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
