<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Payment;
use App\Models\Order;
use App\Models\Additional;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index($id)
    {
        $room = Room::find($id);
        $values = session()->get('values');
        $hargaRuangan = session()->get('values.duration') * $room->price;
        return view('order.index', compact('room', 'values', 'hargaRuangan'));
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

    public function additional($id)
    {
        $room = Room::find($id);
        $starter = Additional::where('type', 'Starter')
                ->where('room_id', $id)
                ->get();
        $mainCourse = Additional::where('type', 'Main Course')
                ->where('room_id', $id)
                ->get();
        $drinks = Additional::where('type', 'Deserts & Drinks')
                ->where('room_id', $id)
                ->get();

        return view('room.additional', compact('room', 'starter', 'drinks', 'mainCourse'));
    }

    public function totaladditional(Request $request, $id)
    {
        session()->start();
        $room = room::find($id);
        $cart = [];
        $additional = Additional::where('room_id', $id)->get();
            foreach ($additional as $additionals) {
                $value = $request->input("myNumber{$additionals->id}");

                if (!empty($value)) {
                    $additional = Additional::find($additionals->id);
        
                    if ($additional) {
                        $name = $additional->name;
                        $quantity = $value;
                        $price = $additional->price;
                        $total = $request->input("myNumber{$additionals->id}") * $price;
                        $cart[] = [
                            'id' => $additionals->id,
                            'name' => $name,
                            'price' => $price,
                            'quantity' => $value,
                            'total' => $total,
                        ];
                    }
                }
            }
        session()->put('cart', $cart);

        return view('room.totalAdditional', compact('cart', 'room'));
    }

    public function orderWithAdditional(Request $request, $id)
    {
        session()->start();
        $total = [
            'quantity' => $request->input("totalQuantity"),     
            'price' => $request->input("totalPrice")
        ];

        session()->put('total', $total);
             
        $room = Room::find($id);
        $values = session()->get('values');
        $hargaRuangan = session()->get('values.duration') * $room->price;
        return view('order.index', compact('room', 'values', 'hargaRuangan', 'total'));
    }

    public function store(Request $request, $id)
    {
        $room = Room::find($id);
        session()->start();
        $order = [
            'room_id' => $room->id,
            'user_id' => auth()->user()->id,
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'phonenumber' => $request->input('phonenumber'),
            'specialrequest' => $request->input('specialrequest'),
            'totalprice' => $request->input('totalprice'),
        ];

        session()->put('order', $order);
        $order = session()->get('order');
        $room = Room::find($id);
        $total = session()->get('total');
        $values = session()->get('values');
        $serviceFee = 5000;
        $hargaRuangan = session()->get('values.duration') * $room->price;
        return view('order.payment', compact('room', 'values', 'hargaRuangan', 'total', 'order', 'serviceFee'));
    }

    public function paymentStore(Request $request, $id)
    {
        session()->start();
        $room = Room::find($id);
        $orderValue = session()->get('order');
        $values = session()->get('values');
        $orderPayment = [
            'room_id' => $room->id,
            'user_id' => $orderValue['user_id'],
            'fullname' =>  $orderValue['fullname'],
            'email' =>  $orderValue['email'],
            'phonenumber' =>  $orderValue['phonenumber'],
            'specialrequest' =>  $orderValue['specialrequest'],
            'checkinday' => $values['date'],
            'checkinhour' => $values['hour'],
            'checkoutday' => $values['date'],
            'checkouthour' => $values['checkouthour'],
            'duration' => $values['duration'],
            'additionalItems' => $request->input('additionalItems'),
            'totalprice' => $request->input('totalprice')
        ];
        
        $paymentInfo = [
            'paymentmethod' => $request->paymentmethod,
            'points' => $request->points,
        ];
        
        session()->put('orderPayment', $orderPayment);
        session()->put('paymentinfo', $paymentInfo);
        $virtualNumber = mt_rand(100000000000, 999999999999);
        return view('order.confirmpayment', compact('room', 'paymentInfo', 'orderPayment', 'virtualNumber'));
    }
    
    public function confirmPayment()
    {
        return view('order.confirmpayment');
    }
    
    public function confirmPaymentStore(Request $request, $id)
    {
        session()->start();
        $orderPayment = Session::get('orderPayment');
        $paymentInfo = Session::get('paymentInfo');
        
        $orderReceipt = Order::create([
            'room_id' => $orderPayment['room_id'],
            'user_id' => $orderPayment['user_id'],
            'fullname' =>  $orderPayment['fullname'],
            'email' =>  $orderPayment['email'],
            'phonenumber' =>  $orderPayment['phonenumber'],
            'specialrequest' =>  $orderPayment['specialrequest'],
            'checkinday' => $orderPayment['checkinday'],
            'checkinhour' => $orderPayment['checkinhour'],
            'checkoutday' => $orderPayment['checkoutday'],
            'checkouthour' => $orderPayment['checkouthour'],
            'duration' => $orderPayment['duration'],
            'additionalItems' => $orderPayment['additionalItems'],
            'totalprice' => $orderPayment['totalprice'],
            'status' => 'Processing'
        ]);
        session()->forget('orderPayment');
        session()->forget('paymentInfo');
        session()->forget('order');
        session()->forget('values');
        $room = Room::find($id);
        $receipt = Order::where('id', $orderReceipt->id)->first();
        $payment = Payment::where('order_id', $orderReceipt->id)->get();
        $paymentMethod = $payment->pluck('paymentmethod')->first();
        return view('order.receipt', compact('paymentMethod', 'room', 'receipt'));
    }
}
