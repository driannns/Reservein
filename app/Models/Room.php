<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $table = 'Room';
    protected $guarded = [
        'id'
    ];

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }

    public function additional()
    {
        return $this->hasMany(Additional::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
