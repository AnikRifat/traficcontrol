<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OffenceType extends Model
{

    use SoftDeletes;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($offence) {
            $randomNumber = str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
            $offence->code = 'OT-' . $randomNumber;
        });
    }



}
