<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('pages.index')->with('user', $user);
    }

    public function detail(){
        return view('pages.detail-course');
    }

    public function checkout(){
        return view('pages.checkout');
    }
}
