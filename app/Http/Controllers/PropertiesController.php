<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Room;
use App\Models\Rating;
use App\Models\Partner;
use App\Models\Order;
use App\Models\AdditionalOrder;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('partner.create-properties');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file1 = $request->foto1;
        $file2 = $request->foto2;
        $file3 = $request->foto3;
        $file4 = $request->foto4;

        $name1 = 'PROPERTIES1_' . date('Ymdhis') . '.' . $file1->getClientOriginalExtension();
        $name2 = 'PROPERTIES2_' . date('Ymdhis') . '.' . $file2->getClientOriginalExtension();
        $name3 = 'PROPERTIES3_' . date('Ymdhis') . '.' . $file3->getClientOriginalExtension();
        $name4 = 'PROPERTIES4_' . date('Ymdhis') . '.' . $file4->getClientOriginalExtension();

        $file1->move('room/', $name1);
        $file2->move('room/', $name2);
        $file3->move('room/', $name3);
        $file4->move('room/', $name4);
        
        $properties = Room::create([
            "partner_id" => $request->partner_id,
            "room_name" => $request->name,
            "address1" => $request->address1,
            "address2" => $request->address2,
            "subdistrict" => $request->subdistrict,
            "city" => $request->city,
            "zipcode" => $request->zipcode,
            "room_type" => $request->type,
            "room_area" => $request->room_area,
            "person" => $request->person,
            "room_description" => $request->room_description,
            "properties1" => $request->properties1,
            "properties2" => $request->properties2,
            "properties3" => $request->properties3,
            "properties4" => $request->properties4,
            "properties5" => $request->properties5,
            "properties6" => $request->properties6,
            "properties7" => $request->properties7,
            "properties8" => $request->properties8,
            "special_note" => $request->special_note,
            "foto1" => $name1,
            "foto2" => $name2,
            "foto3" => $name3,
            "foto4" => $name4,
            "price" => $request->price,
        ]);

        Notification::create([
            "title" => "Properties Uploaded",
            "description" => "Your properties $properties->room_name has successfully been uploaded"
        ]);
        // dd($properties->id);
        session()->put('roomId', $properties->id);
        
        return redirect()->route('additional.index')->with('message', 'Room has been added.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $room = Room::withCount('rating')->find($id);
        $rating = Rating::where('room_id', $id)->paginate(2);

        $allRating = Rating::where('room_id', $id)->get();
        $jumlahRating = 0;
        $jumlahRating =+ $allRating->sum('star_rating');
        if(count($allRating) > 0){
            $ratingMean = $jumlahRating / count($allRating);
        }else{
            $ratingMean = 0;
        }
        $partnerId = $room->partner_id;
        $partner = Partner::find($partnerId);
        $partnerName = $partner->username;
        $totalRatings = $room->rating_count;
        return view('partner.detail-properties', compact('room', 'totalRatings', 'rating', 'allRating','ratingMean', 'partnerName'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $properties = Room::find($id);
        
        return view('partner.edit-properties', compact('properties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'foto1' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'foto2' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'foto3' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'foto4' => 'image|mimes:jpeg,png,jpg,gif,svg',
            "name" => 'required',
            "address1" => 'required',
            "address2" => 'required',
            "subdistrict" =>'required',
            "city" => 'required',
            "zipcode" => 'required',
            "type" => 'required',
            "room_area" => 'required',
            "person" => 'required',
            "room_description" => 'required',
            "properties1" => 'required',
            "properties2" => 'required',
            "properties3" => 'required',
            "properties4" => 'required',
            "properties5" => 'required',
            "properties6" => 'required',
            "properties7" => 'required',
            "properties8" => 'required',
            "special_note" => 'required',
            "price" => 'required',
        ]);

        // try{
            $properties = Room::find($id);

            if($request->hasfile('foto1') || $request->hasfile('foto2') || $request->hasfile('foto3') || $request->hasfile('foto4'))
            {
                $fotocolumn1 = $properties->foto1;
                $fotocolumn2 = $properties->foto2;
                $fotocolumn3 = $properties->foto3;
                $fotocolumn4 = $properties->foto4;
                $path1 = 'room/' . $fotocolumn1;
                $path2 = 'room/' . $fotocolumn2;
                $path3 = 'room/' . $fotocolumn3;
                $path4 = 'room/' . $fotocolumn4;
                if(File::exists($path1)){
                    File::delete($path1);
                    File::delete($path2);
                    File::delete($path3);
                    File::delete($path4);
                }
                $file1 = $request->file('foto1');
                $file2 = $request->file('foto2');
                $file3 = $request->file('foto3');
                $file4 = $request->file('foto4');
                $name1 = 'PROPERTIES1_' . date('Ymdhis') . '.' . $file1->getClientOriginalExtension();
                $name2 = 'PROPERTIES2_' . date('Ymdhis') . '.' . $file2->getClientOriginalExtension();
                $name3 = 'PROPERTIES3_' . date('Ymdhis') . '.' . $file3->getClientOriginalExtension();
                $name4 = 'PROPERTIES4_' . date('Ymdhis') . '.' . $file4->getClientOriginalExtension();
                
                $file1->move('room/', $name1);
                $file2->move('room/', $name2);
                $file3->move('room/', $name3);
                $file4->move('room/', $name4);

                $properties->update([
                    "foto1" => $name1,
                    "foto2" => $name2,
                    "foto3" => $name3,
                    "foto4" => $name4,
                ]); 
            }

            $properties->update([
                "partner_id" => $request->partner_id,
                "room_name" => $request->name,
                "address1" => $request->address1,
                "address2" => $request->address2,
                "subdistrict" => $request->subdistrict,
                "city" => $request->city,
                "zipcode" => $request->zipcode,
                "room_type" => $request->type,
                "room_area" => $request->room_area,
                "person" => $request->person,
                "room_description" => $request->room_description,
                "properties1" => $request->properties1,
                "properties2" => $request->properties2,
                "properties3" => $request->properties3,
                "properties4" => $request->properties4,
                "properties5" => $request->properties5,
                "properties6" => $request->properties6,
                "properties7" => $request->properties7,
                "properties8" => $request->properties8,
                "special_note" => $request->special_note,
                "price" => $request->price,
            ]);

            Notification::create([
                "title" => "Properties Updated",
                "description" => "Your properties $properties->room_name has successfully been Updated"
            ]);
            session()->put('roomId', $properties->id);
            if($request->save){
                return redirect()->route('partnerDashboard')->with('message', 'Room has been updated.');
                }else{
                return redirect()->route('additional.index')->with('message', 'Room has been updated.');
            }
        //  } 
        //  catch (\Exception $e) {
        // //     // return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        // }
            
        }
        
        /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $rating = Rating::where('room_id', $id)->get();
        if(!empty($rating)) {
            foreach ($rating as $ratings) {
                $ratings->delete();
            }
        }
        $order = Order::where('room_id', $id)->get();
        if(!empty($order)) {
            foreach($order as $orders) {
                $additionalOrder = AdditionalOrder::where('order_id', $orders->id)->get();
                if(!empty($additionalOrder)) {
                    foreach($additionalOrder as $additionalOrders){
                        $additionalOrders->delete();
                    }
                }
                $orders->delete();

            }
        }
        $room->delete();

        return redirect()->route('partnerDashboard')->with('message', 'Property has been deleted successfully');
    }
}
