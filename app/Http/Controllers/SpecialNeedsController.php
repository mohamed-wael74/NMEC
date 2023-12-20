<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialNeedsController extends Controller
{
    public function index()
    {
        return view('special-needs');
    }
}
