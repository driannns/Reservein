<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['room_id','user_id','fullname','email','phonenumber', 'specialrequest', 'checkinday', 'checkinhour', 'checkoutday', 'checkouthour', 'duration', 'additionalItems', 'totalprice', 'status'];

    public function payment()
    {
        return $this->belongsTo(Order::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function additional()
    {
        return $this->hasMany(AdditionalOrder::class);
    }
}
