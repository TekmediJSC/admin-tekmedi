<?php

namespace App\Request\Admin\Home;

class Slide {
    public static function rules() {
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ];
    }
}