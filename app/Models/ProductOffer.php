<?php

namespace App\Models;

use Database\Factories\ProductOfferFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProductOffer
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $slug
 * @property string $name
 * @property int $product_id
 * @property int $merchant_id
 * @property int $color_id
 * @property int $price
 * @property-read ProductColor $color
 * @property-read ProductMerchant $merchant
 * @property-read Product $product
 * @method static ProductOfferFactory factory(...$parameters)
 * @method static Builder|ProductOffer newModelQuery()
 * @method static Builder|ProductOffer newQuery()
 * @method static Builder|ProductOffer query()
 * @method static Builder|ProductOffer whereColorId($value)
 * @method static Builder|ProductOffer whereCreatedAt($value)
 * @method static Builder|ProductOffer whereId($value)
 * @method static Builder|ProductOffer whereMerchantId($value)
 * @method static Builder|ProductOffer whereName($value)
 * @method static Builder|ProductOffer wherePrice($value)
 * @method static Builder|ProductOffer whereProductId($value)
 * @method static Builder|ProductOffer whereSlug($value)
 * @method static Builder|ProductOffer whereUpdatedAt($value)
 */
class ProductOffer extends Model
{
    use HasFactory;

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function merchant(): BelongsTo
    {
        return $this->belongsTo(ProductMerchant::class);
    }

    public function color(): BelongsTo
    {
        return $this->belongsTo(ProductColor::class);
    }
}
