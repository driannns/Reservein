<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('room.order');
    }

    public function payment()
    {
        return view('room.payment');
    }
    
    public function receipt()
    {
        return view('room.receipt');
    }
}
