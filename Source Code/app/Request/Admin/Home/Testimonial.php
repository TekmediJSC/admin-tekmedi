<?php

namespace App\Request\Admin\Home;

class Testimonial {
    public static function rules() {
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ];
    }
}