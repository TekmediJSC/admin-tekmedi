<?php

namespace App\Request\Admin\Home;

class Work {
    public static function rules() {
        return [
            'title' => 'required',
            'image' => 'required'
        ];
    }
}