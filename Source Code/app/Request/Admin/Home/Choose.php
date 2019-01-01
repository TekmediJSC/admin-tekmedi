<?php

namespace App\Request\Admin\Home;

class Choose {
    public static function rules() {
        return [
            'title' => 'required',
            'extra' => 'required',
            'image' => 'required'
        ];
    }
}