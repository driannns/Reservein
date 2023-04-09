<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'star_rating'
    ];

    public function room()
    {
        $this->belongsTo(Room::class);
    }
}
