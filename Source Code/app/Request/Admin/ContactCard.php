<?php

namespace App\Request\Admin;

class ContactCard {
    public static function rules() {
        return [
            'name' => 'required',
        ];
    }
}