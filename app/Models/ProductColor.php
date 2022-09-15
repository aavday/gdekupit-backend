<?php

namespace App\Models;

use Database\Factories\ProductColorFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProductColor
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $slug
 * @property string $name
 * @property string $color_hex
 * @method static ProductColorFactory factory(...$parameters)
 * @method static Builder|ProductColor newModelQuery()
 * @method static Builder|ProductColor newQuery()
 * @method static Builder|ProductColor query()
 * @method static Builder|ProductColor whereColorHex($value)
 * @method static Builder|ProductColor whereCreatedAt($value)
 * @method static Builder|ProductColor whereId($value)
 * @method static Builder|ProductColor whereName($value)
 * @method static Builder|ProductColor whereSlug($value)
 * @method static Builder|ProductColor whereUpdatedAt($value)
 */
class ProductColor extends Model
{
    use HasFactory;
}
