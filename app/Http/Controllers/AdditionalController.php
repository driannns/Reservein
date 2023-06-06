<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Additional;
use App\Models\Room;

use Illuminate\Http\Request;

class AdditionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                
        return view('partner.create-additional');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $roomId = session()->get('roomId');
        $foto = $request->foto;

        $name = 'ADDITIONAL_' . date('Ymdhis') . '.' . $foto->getClientOriginalName();
        $foto->move('additional/', $name);
        $additional = Additional::create([
            "room_id" => $roomId,
            "type" => $request->type,
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "foto" => $name
        ]);

        $roomName = Room::find($additional->room_id); 

        Notification::create([
            "title" => "Additional Uploaded",
            "description" => "Your additional for $roomName->room_name has successfully been Uploaded"
        ]);

        if($request->done){
            return redirect()->route('partnerDashboard');
        }
        return redirect()->route('additional.index')->with('message', 'Additional has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
