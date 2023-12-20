<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowToGetHereController extends Controller
{
    public function index()
    {
        return view('how-to-get-here');
    }
}
