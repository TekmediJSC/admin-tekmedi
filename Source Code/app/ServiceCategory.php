<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function services() {
        return $this->hasMany('App\Service', 'parent_id');
    }

    public static function selectArray() {
        $result = [];
        foreach (ServiceCategory::all() as $category) {
            $result[$category->id] = $category->name;
        }
        return $result;
    }

}
