<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Blog
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\BlogCategory[] $blogCategories
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog query()
 * @mixin \Eloquent
 */
class Blog extends Model {
    public function blogCategories() {
        return $this->belongsToMany('App\BlogCategory');
    }
}
