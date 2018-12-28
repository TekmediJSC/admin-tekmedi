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
 */
class Item extends Model {
    public const SLIDE = 1;
    public const SERVICE = 2;
    public const PRODUCT = 3;
    public const CHOOSE = 4;
    public const TESTIMONIAL = 5;

    protected $table = 'items';

    protected $fillable = ['type', 'title', 'description', 'image', 'link', 'order', 'extra'];

    public static function slides() {
        return self::where('type', '=', self::SLIDE);
    }

    public static function services() {
        return self::where('type', '=', self::SERVICE);
    }

    public static function products() {
        return self::where('type', '=', self::PRODUCT);
    }

    public static function chooses() {
        return self::where('type', '=', self::CHOOSE);
    }

    public static function testimonials() {
        return self::where('type', '=', self::TESTIMONIAL);
    }
}
