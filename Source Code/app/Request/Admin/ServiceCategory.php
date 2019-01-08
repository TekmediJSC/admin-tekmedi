<?php

namespace App\Request\Admin;

class ServiceCategory {
    public static function rules() {
        return [
            'name' => 'required'
        ];
    }
}