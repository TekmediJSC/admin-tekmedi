<?php

namespace App\Request\Admin;

class Service {
    public static function rules() {
        return [
            'name' => 'required',
            'parent_id' => 'required',
            'short_description' => 'required',
            'image' => 'required',
            'content' => 'required'
        ];
    }
}