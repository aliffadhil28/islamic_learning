<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function detail(){
        return view('pages.detail-course');
    }
}
