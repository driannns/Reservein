<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $table = 'Room';
    protected $fillable = [
        'name',
        'room',
        'price',
        'address',
        'description',
        'room_name', 
        'location',
        'company',
        'room_type',
        'room_area',
        'extra',
        'person',
        'room_description',
        'properties1',
        'properties2',
        'properties3',
        'properties4',
        'properties5',
        'properties6',
        'properties7',
        'properties8',
        'special_note',
        'foto1',
        'foto2',
        'foto3',
        'foto4',
        'price',
        'review',
        'description'
    ];

    // public function rating()
    // {
    //     return $this->hasMany(Rating::class);
    // }
}
