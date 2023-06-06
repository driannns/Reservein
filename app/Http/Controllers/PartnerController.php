<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Models\Room;
use App\Models\Partner;
use App\Models\Order;
use App\Models\Notification;

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

    public function logout()
    {
        Auth::guard('partner')->logout();

        return redirect()->route('partnerLogin-form')->with('message', 'Logout Successfully');
    }

    public function orderHistory()
    {
        $room = Room::where('partner_id', auth('partner')->user()->id)->get();
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
        $order = Order::find($id);

            $order->update([
                'status' => $request->status
            ]);
        return redirect()->route('partnerHistory', $id);
    }

    public function notification()
    {
        $notification = Notification::all();
        return view('partner.notification', compact('notification'));
    }

    public function dashboardChart()
    {
        $selectedMonths = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $months = [
            'January' => 0, 
            'February' => 0, 
            'March' => 0, 
            'April' => 0, 
            'May' => 0, 
            'June' => 0, 
            'July' => 0, 
            'August' => 0, 
            'September' => 0, 
            'October' => 0, 
            'November' => 0, 
            'December' => 0
        ];
        $orders = [];
        $room = Room::where('partner_id', auth('partner')->user()->id)->get();
        if(!empty($room)){
            foreach($room as $rooms){
                $location = Room::where('partner_id', auth('partner')->user()->id)->pluck('city')->toArray(); 
                $selectedLocation = Room::where('partner_id', auth('partner')->user()->id)->pluck('city')->toArray(); 
                $order = Order::where('room_id', $rooms->id)->pluck('checkinday')->toArray(); 
                $orders = array_merge($orders, $order);
            }
        }
        foreach($selectedMonths as $value){
            if(!empty($orders)){
                foreach($orders as $data){
                    $date = Carbon::parse($data);
                    $month = $date->format('F');
                    if($month === $value){
                        $months[$value] += 1;
                    }
                }
            }
        }
        

        return view('partner.admin-chart', compact('months'));
    }
}