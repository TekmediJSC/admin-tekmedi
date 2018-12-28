<?php

namespace App\Request\Admin\Home;

class Service {
    public static function rules() {
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ];
    }
}