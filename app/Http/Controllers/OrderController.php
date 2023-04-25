<?php

namespace App\Http\Controllers;
use App\Models\Room;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order($id)
    {
        $room = Room::find($id);
        return view('order.index', compact('room'));
    }

    public function payment($id)
    {
        $room = Room::find($id);
        return view('order.payment', compact('room'));
    }
    
    public function receipt($id)
    {
        $room = Room::find($id);
        return view('order.receipt', compact('room'));
    }
}
