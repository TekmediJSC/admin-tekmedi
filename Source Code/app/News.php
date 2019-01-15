<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
