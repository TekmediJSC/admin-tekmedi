<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nestable\NestableTrait;

/**
 * App\ServiceCategory
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Service[] $services
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceCategory query()
 * @mixin \Eloquent
 */
class ServiceCategory extends Model {
    use NestableTrait;
    protected $parent = 'parent_id';

    public function services() {
        return $this->hasMany('App\Service');
    }

}
