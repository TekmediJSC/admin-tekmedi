<?php

namespace App\Helpers;

class Url {
    public static function LFMUrl($short_path) {
        return url(config('lfm.url_prefix') . $short_path);
    }
}