<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Driver extends Model
{
    use SoftDeletes;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($driver) {
            $randomNumber = str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
            $driver->code = 'DI-' . $randomNumber;
        });
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
