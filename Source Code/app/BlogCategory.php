<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BlogCategory
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Blog[] $blogs
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory query()
 * @mixin \Eloquent
 */
class BlogCategory extends Model {

    public function blogs() {
        return $this->belongsToMany('App\Blog');
    }
}
