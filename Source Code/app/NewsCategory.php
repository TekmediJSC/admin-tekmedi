<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\NewsCategory
 *
 * @property int $id
 * @property string $name
 * @property string|null $url
 * @property string|null $meta_description
 * @property string|null $meta_keyword
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\News[] $news
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsCategory whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsCategory whereMetaKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsCategory whereUrl($value)
 * @mixin \Eloquent
 */
class NewsCategory extends Model {
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'meta_description', 'meta_keyword'];

    public function news() {
        return $this->hasMany('App\News');
    }

    public static function selectArray() {
        $result = [];
        foreach (NewsCategory::all() as $category) {
            $result[$category->id] = $category->name;
        }
        return $result;
    }
}
