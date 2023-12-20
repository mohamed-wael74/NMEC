<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index()
    {
        return view('training-center');
    }
}
