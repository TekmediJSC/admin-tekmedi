<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Item
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $type
 * @property string|null $title
 * @property string|null $description
 * @property string|null $image
 * @property string|null $link
 * @property int|null $order
 * @property string|null $extra
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereUpdatedAt($value)
 */
class Item extends Model {
    public const SLIDE = 1;
    public const SERVICE = 2;
    public const WORK = 3;
    public const WHYCHOOSE = 4;
    public const TESTIMONIAL = 5;

    protected $table = 'items';

    protected $fillable = ['type', 'title', 'description', 'image', 'link', 'order', 'extra'];

    public static function slides() {
        return self::where('type', '=', self::SLIDE);
    }

    public static function services() {
        return self::where('type', '=', self::SERVICE);
    }

    public static function works() {
        return self::where('type', '=', self::WORK);
    }

    public static function chooses() {
        return self::where('type', '=', self::WHYCHOOSE);
    }

    public static function testimonials() {
        return self::where('type', '=', self::TESTIMONIAL);
    }
}
