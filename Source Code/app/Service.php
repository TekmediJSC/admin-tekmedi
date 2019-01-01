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
 */
class Service extends Model {
    public function category() {
        return $this->belongsTo('App\ServiceCategory');
    }
}
