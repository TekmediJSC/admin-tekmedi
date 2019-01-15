<?php

namespace App\Request\Admin;

class News {
    public static function rules() {
        return [
            'title' => 'required',
            'news_category_id' => 'required',
            'short_description' => 'required',
            'image' => 'required',
            'content' => 'required'
        ];
    }
}