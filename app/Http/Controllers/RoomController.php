<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Partner;
use App\Models\Rating;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $room = Room::withCount('rating')->paginate(5);
        foreach ($room as $rooms){
            $totalposts = $rooms->rating_count;
        }
        return view('dashboard', compact('room'));
    }

    public function indexfilter(Request $request)
    {
        $rooms = Room::query();
        if ($request->has('location')){
            $rooms->where('city', 'LIKE', '%' .  $request->location . '%')->get();
        }

        if($request->has('roomType')){
            $rooms->where('room_type', 'LIKE', '%' . $request->roomType . '%')->get();
        }
        
        $room = $rooms->withCount('rating')->paginate(5);
        foreach ($room as $rooms){
            $totalposts = $rooms->rating_count;
        }
        return view('dashboard', compact('room'));
    }

    public function room($id)
    {
        $room = Room::withCount('rating')->find($id);
        $rating = Rating::where('room_id', $id)->paginate(2);
        $allRating = Rating::where('room_id', $id)->get();
        $jumlahRating = 0;
        $jumlahRating =+ $allRating->sum('star_rating');
        $partner = Partner::find($room->partner_id);
        $partnerName = $partner->username;
        if(count($allRating) > 0){
            $ratingMean = $jumlahRating / count($allRating);
        }else{
            $ratingMean = 0;
        }
        $totalRatings = $room->rating_count;
        return view('room.index', compact('room', 'totalRatings', 'rating', 'allRating','ratingMean', 'partnerName'));
    }

    public function session(Request $request, $id)
    {
        session()->start();
        if($request->input('hour') <= 9 ){
            $hour = '0'.$request->input('hour').':00 WIB';
        }
        else{
            $hour = $request->input('hour').':00 WIB';
        }
        $checkouthour = $request->input('hour') + $request->input('duration');
        if($checkouthour <= 9 ){
            $formatcheckout = '0'.$checkouthour.':00 WIB';
        }
        else{
            $formatcheckout = $checkouthour.':00 WIB';
        }
        $values = [        
            'date' => $request->input('date'),
            'hour' => $hour,
            'duration' => $request->input('duration'),
            'checkouthour' => $formatcheckout,    
        ];
        session()->put('values', $values);

        return redirect("/order/form/$id");
    }
}
