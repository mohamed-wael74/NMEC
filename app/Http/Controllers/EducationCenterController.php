<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationCenterController extends Controller
{
    public function index()
    {
        return view('education-center');
    }
}
