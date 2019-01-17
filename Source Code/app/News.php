<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\News
 *
 * @property int $id
 * @property int $news_category_id
 * @property string $title
 * @property string $image
 * @property string $short_description
 * @property string $content
 * @property string|null $url
 * @property string|null $meta_description
 * @property string|null $meta_keyword
 * @property int $views
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\NewsCategory $category
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereMetaKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereNewsCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereViews($value)
 * @mixin \Eloquent
 */
class News extends Model {
    protected $primaryKey = 'id';
    protected $fillable = ['news_category_id', 'title', 'image', 'short_description', 'content', 'meta_description', 'meta_keyword', 'user_id'];

    public function category() {
        return $this->belongsTo('App\NewsCategory', 'news_category_id');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
