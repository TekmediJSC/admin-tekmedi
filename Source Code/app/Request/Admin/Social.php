<?php

namespace App\Request\Admin;

class Social {
    public static function rules() {
        return [
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'skype' => 'required',
        ];
    }
}