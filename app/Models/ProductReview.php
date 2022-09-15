<?php

namespace App\Models;

use Database\Factories\ProductReviewFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProductReview
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $slug
 * @property string $name
 * @property string $review_text
 * @property string $pluses
 * @property string $minuses
 * @property int $rating
 * @property int $product_id
 * @property int $user_id
 * @property-read Product $product
 * @property-read User $user
 * @method static ProductReviewFactory factory(...$parameters)
 * @method static Builder|ProductReview newModelQuery()
 * @method static Builder|ProductReview newQuery()
 * @method static Builder|ProductReview query()
 * @method static Builder|ProductReview whereCreatedAt($value)
 * @method static Builder|ProductReview whereId($value)
 * @method static Builder|ProductReview whereMinuses($value)
 * @method static Builder|ProductReview whereName($value)
 * @method static Builder|ProductReview wherePluses($value)
 * @method static Builder|ProductReview whereProductId($value)
 * @method static Builder|ProductReview whereRating($value)
 * @method static Builder|ProductReview whereReviewText($value)
 * @method static Builder|ProductReview whereSlug($value)
 * @method static Builder|ProductReview whereUpdatedAt($value)
 * @method static Builder|ProductReview whereUserId($value)
 */
class ProductReview extends Model
{
    use HasFactory;

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
