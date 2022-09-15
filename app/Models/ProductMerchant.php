<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProductMerchant
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $slug
 * @property string $name
 * @property string $merchant_website
 * @property string $merchant_city
 * @property-read Collection|\App\Models\ProductOffer[] $productOffers
 * @property-read int|null $product_offers_count
 * @method static \Database\Factories\ProductMerchantFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductMerchant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductMerchant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductMerchant query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductMerchant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductMerchant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductMerchant whereMerchantCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductMerchant whereMerchantWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductMerchant whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductMerchant whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductMerchant whereUpdatedAt($value)
 */
class ProductMerchant extends Model
{
    use HasFactory;

    public function productOffers(): HasMany
    {
        return $this->hasMany(ProductOffer::class, 'merchant_id');
    }
}
