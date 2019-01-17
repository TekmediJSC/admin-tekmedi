<?php

namespace App\Request;

class Contact {
    public static function rules() {
        return [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'found' => 'required',
            'message' => 'required|max:1000',
        ];
    }
}