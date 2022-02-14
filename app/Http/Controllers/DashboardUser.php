<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboarUser extends Controller
{
    public function index()

    {
        return view('user.Dashboard');
    }
}

