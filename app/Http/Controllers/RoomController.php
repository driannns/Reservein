<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $room = Room::paginate(5);
        return view('dashboard', compact('room'));
    }

    public function indexfilter(Request $request)
    {
        $rooms = Room::query();
        if ($request->has('location')){
            $rooms->where('location', 'LIKE', '%' .  $request->location . '%')->get();
        }

        if($request->has('roomType')){
            $rooms->where('room_type', 'LIKE', '%' . $request->roomType . '%')->get();
        }
        
        $room = $rooms->paginate(5);
        // dd($room);
        return view('dashboard', compact('room'));
    }

    public function room($id)
    {
        $room = Room::where('id', $id)->get()->first();
        return view('room.index', compact('room'));
    }

    public function additional()
    {
        return view('room.additional');
    }
}
