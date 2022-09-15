<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property int $category_id
 * @property int $brand_id
 * @property-read ProductBrand $brand
 * @property-read ProductCategory $category
 * @property-read Collection|ProductOffer[] $offers
 * @property-read int|null $offers_count
 * @property-read Collection|ProductReview[] $reviews
 * @property-read int|null $reviews_count
 * @method static ProductFactory factory(...$parameters)
 * @method static Builder|Product newModelQuery()
 * @method static Builder|Product newQuery()
 * @method static Builder|Product query()
 * @method static Builder|Product whereBrandId($value)
 * @method static Builder|Product whereCategoryId($value)
 * @method static Builder|Product whereCreatedAt($value)
 * @method static Builder|Product whereDescription($value)
 * @method static Builder|Product whereId($value)
 * @method static Builder|Product whereName($value)
 * @method static Builder|Product whereSlug($value)
 * @method static Builder|Product whereUpdatedAt($value)
 */
class Product extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(ProductBrand::class);
    }

    public function offers(): HasMany
    {
        return $this->hasMany(ProductOffer::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(ProductReview::class);
    }

    public static function getMinPriceOfOffers($offers) {
        if (!$offers) return null;

        $priceFrom = 0;

        foreach ($offers as $key => $offer) {
            if ($key === 0) {
                $priceFrom = $offer['price'];
            } else if ($key > 0 && $offer['price'] < $priceFrom) {
                $priceFrom = $offer['price'];
            }
        }

        return $priceFrom;
    }
}
