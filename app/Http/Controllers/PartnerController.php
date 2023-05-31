<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Partner;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;


class PartnerController extends Controller
{
    public function index()
    {
        return view('auth.partner-login');
    }

    public function login(Request $request)
    {
        // dd($request->all());   
        $check = $request->all();
        if(Auth::guard('partner')->attempt(['email' => $check['email'], 'password'
        => $check['password']]))
        {
        return redirect()->route('partnerDashboard')->with('error', 'Partner Login Succesfully');
        }   else{ 
            return back()->with('error', 'Invalid Email or Password');
        }
    }

    public function dashboard()
    {
        $room = Room::withCount('order')->where('partner_id', Auth::guard('partner')->user()->id)->paginate(8);
        // $reserve = Order::where('room_id', $room->id)->get();
        foreach ($room as $rooms){
            $totalposts = $rooms->order_count;
        }
        // $reserved = count($reserve);
        // dd($reserved);
        // dd(Auth::guard('partner')->user()->id);
        // dd($room);
        return view('partner.dashboard', compact('room'));
    }

    public function registerForm()
    {
        return view('auth.partner-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Partner::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'termsofservice' => ['required','string', 'max:255'],
        ]);

        $user = Partner::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'termsofservice' => $request->termsofservice,
        ]);


        return redirect()->route('partnerLogin-form')->with('message', 'Partner Created Successfully');
    }

    public function orderHistory(Request $request)
    {
        $partnerId = $request->partner_id;
        $room = Room::where('partner_id', $partnerId)->get();
        $roomIds = $room->pluck('id');
        $orders = [];

        foreach($roomIds as $roomId){
            $order = Order::where('room_id', $roomId)->get();
            if($order->isNotEmpty()){
                for($i = 0; $i < count($order); $i++){
                    $rooms = Room::where('id', $roomId)->get();
                    $roomName= $rooms->pluck('room_name');
                    $order[$i]->room_id = $roomName;
                    $orders[] = $order[$i];
                }
            }
        }
        return view('partner.order-history', ['orders' => $orders]);
    }


    public function updateStatus(Request $request, $id)
    {
        $room = Room::find($id);

        $room->update([
            'status' => $request->status
        ]);
        $partnerId = $request->partner_id;
        $room = Room::where('partner_id', $partnerId)->get();
        $roomIds = $room->pluck('id');
        $orders = [];

        foreach($roomIds as $roomId){
            $order = Order::where('room_id', $roomId)->get();
            if($order->isNotEmpty()){
                // dd($order->room_id);
                $rooms = Room::where('id', $roomId)->get();
                $roomName= $rooms->pluck('room_name');
                $order[0]->room_id = $roomName;
                $orders[] = $order[0];
            }
        }
        return view('partner.order-history', ['orders' => $orders]);
    }
}
