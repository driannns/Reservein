<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'room',
        'price',
        'address',
        'description',
    ];

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
}
