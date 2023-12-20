<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardOfDirectorsController extends Controller
{
    public function index()
    {
        return view('board-of-directors');
    }
}
