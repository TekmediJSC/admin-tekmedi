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
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceCategory whereUpdatedAt($value)
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
