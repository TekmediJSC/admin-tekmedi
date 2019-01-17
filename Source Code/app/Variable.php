<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variable extends Model {
    protected $primaryKey = 'key';
    protected $fillable = ['value'];

    public static function getByKey($key) {
        $row = Variable::find($key);
        if ($row) {
            return $row->value;
        }
        return null;
    }
}
