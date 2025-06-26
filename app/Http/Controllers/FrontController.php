<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view("front.index");
    }

    public function comingSoon()
    {
        return view("front.coming_soon");
    }
}
