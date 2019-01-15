<?php

namespace App\Request\Admin;

class NewsCategory {
    public static function rules() {
        return [
            'name' => 'required'
        ];
    }
}