<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    use HasFactory;
    protected $fillable = ['room_id', 'type', 'name', 'description', 'price', 'foto'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
