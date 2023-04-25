<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $room = Room::all();
        return view('dashboard', compact('room'));
    }

    public function room($id)
    {
        $room = Room::where('id', $id)->get()->first();
        return view('room.index', compact('room'));
    }
}
