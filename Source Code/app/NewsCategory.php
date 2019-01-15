<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
