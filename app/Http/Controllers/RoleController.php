<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view ('auth.role');
    }

    public function post(Request $request)
    {
        $role = $request->role;
        // $data = [
        //     'key' => $role
        // ];
        // return redirect()->route('register', compact('data'));
        return redirect()->route('register')->with('data', $role);
    }
}
