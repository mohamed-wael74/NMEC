<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MummiesController extends Controller
{
    public function index()
    {
        return view('mummies');
    }
}
