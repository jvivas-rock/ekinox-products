<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function products()
    {
        return view('products');
    }

    public function cocoa()
    {
        return view('cocoa');
    }

    public function fruits()
    {
        return view('fruits');
    }
}
