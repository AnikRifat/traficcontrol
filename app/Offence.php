<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Offence extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->officer_id = Auth::user()->id;

            $randomNumber = str_pad(rand(1, 9999), 6, '0', STR_PAD_LEFT);
            $model->ticket_code = 'RVPN-' . $randomNumber;
        });
    }
    public function OffenceType()
    {
        return $this->belongsTo(OffenceType::class, 'offence_id');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id', 'user_id');
    }

    public function officer()
    {
        return $this->belongsTo(User::class, 'officer_id');
    }
}
