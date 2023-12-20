<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcoFrendilyController extends Controller
{
    public function index()
    {
        return view('eco-frendily');
    }
}
