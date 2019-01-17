<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Service
 *
 * @property-read \App\ServiceCategory $category
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $short_description
 * @property string $image
 * @property string $content
 * @property string|null $url
 * @property string|null $meta_description
 * @property string|null $meta_keyword
 * @property int $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereMetaKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereUrl($value)
 */
class Service extends Model {
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'short_description', 'image', 'content', 'url', 'meta_description', 'meta_keyword', 'parent_id'];

    public function category() {
        return $this->belongsTo('App\ServiceCategory', 'parent_id');
    }
}
