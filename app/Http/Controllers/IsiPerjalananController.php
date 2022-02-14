<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsiPerjalananController extends Controller
{
    public function index()

    {
        return view('user.isiperjalanan');
    }
}


