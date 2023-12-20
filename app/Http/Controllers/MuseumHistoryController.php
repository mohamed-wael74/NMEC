<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuseumHistoryController extends Controller
{
    public function index()
    {
        return view('museum-history');
    }
}
