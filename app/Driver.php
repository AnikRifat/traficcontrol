<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Driver extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'contact',
        'dob',
        'license_id_no',
        'license_type',
        'nationality',
        'civil_status',
        'user_id',
        'permanent_address',
        'present_address'
    ];
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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
